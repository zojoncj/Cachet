<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Subscribers;

use CachetHQ\Cachet\Bus\Events\System\SystemWasInstalledEvent;
use CachetHQ\Cachet\Bus\Events\System\SystemWasResetEvent;
use CachetHQ\Cachet\Bus\Events\System\SystemWasUpdatedEvent;
use CachetHQ\Cachet\Settings\Cache;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;

/**
 * This is the command subscriber class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class CommandSubscriber
{
    /**
     * The settings cache instance.
     *
     * @var \CachetHQ\Cachet\Settings\Cache
     */
    protected $cache;

    /**
     * The config repository instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new command subscriber instance.
     *
     * @param \CachetHQ\Cachet\Settings\Cache         $cache
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Cache $cache, Repository $config)
    {
        $this->cache = $cache;
        $this->config = $config;
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen('command.installing', __CLASS__.'@fireInstallingCommand', 5);
        $events->listen('command.updating', __CLASS__.'@fireUpdatingCommand', 5);
        $events->listen('command.resetting', __CLASS__.'@fireResettingCommand', 5);
    }

    /**
     * Fire the installing command.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function fireInstallingCommand(Command $command)
    {
        $this->handleMainCommand($command);

        event(new SystemWasInstalledEvent());

        $command->info('System was installed!');
    }

    /**
     * Fire the updating command.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function fireUpdatingCommand(Command $command)
    {
        $this->handleMainCommand($command);

        event(new SystemWasUpdatedEvent());

        $command->info('System was updated!');
    }

    /**
     * Fire the resetting command.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    public function fireResettingCommand(Command $command)
    {
        $this->handleMainCommand($command);

        event(new SystemWasResetEvent());

        $command->info('System was reset!');
    }

    /**
     * Handle the main bulk of the command, clear the settings and backup the database.
     *
     * @param \Illuminate\Console\Command $command
     *
     * @return void
     */
    protected function handleMainCommand(Command $command)
    {
        $command->line('Clearing settings cache...');

        $this->cache->clear();

        $command->line('Settings cache cleared!');

        // SQLite does not backup.
        if ($this->config->get('database.default') === 'sqlite') {
            $command->line('Backup skipped: SQLite is not supported.');

            return;
        }

        $command->line('Backing up database...');

        try {
            $command->call('db:backup', [
                '--compression'     => 'gzip',
                '--database'        => $this->config->get('database.default'),
                '--destination'     => 'local',
                '--destinationPath' => Carbon::now()->format('Y-m-d H.i.s'),
                '--no-interaction'  => true,
            ]);
        } catch (Exception $e) {
            $command->error($e->getMessage());
            $command->line('Backup skipped!');
        }

        $command->line('Backup completed!');
    }
}
