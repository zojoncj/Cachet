<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the feed routes class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class FeedRoutes
{
    /**
     * Defines if these routes are for the browser.
     *
     * @var bool
     */
    public static $browser = true;

    /**
     * Define the status page routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['ready'],
        ], function (Registrar $router) {
            $router->get('/atom/{component_group?}', [
                'as'   => 'get:feed.atom',
                'uses' => 'FeedController@atomAction',
            ]);

            $router->get('/rss/{component_group?}', [
                'as'   => 'get:feed.rss',
                'uses' => 'FeedController@rssAction',
            ]);
        });
    }
}
