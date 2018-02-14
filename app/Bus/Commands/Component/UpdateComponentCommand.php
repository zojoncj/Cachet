<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Component;

use CachetHQ\Cachet\Models\Component;

final class UpdateComponentCommand
{
    /**
     * The component to update.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    public $component;

    /**
     * The component name.
     *
     * @var string
     */
    public $name;

    /**
     * The component description.
     *
     * @var string
     */
    public $description;

    /**
     * The component status.
     *
     * @var int
     */
    public $status;

    /**
     * The component link.
     *
     * @var string
     */
    public $link;

    /**
     * The component order.
     *
     * @var int
     */
    public $order;

    /**
     * The component group.
     *
     * @var int
     */
    public $group_id;

    /**
     * Is the component enabled?
     *
     * @var bool
     */
    public $enabled;

    /**
     * JSON meta data for the component.
     *
     * @var array|null
     */
    public $meta;

    /**
     * If this is true, we won't notify subscribers of the change.
     *
     * @var bool
     */
    public $silent;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'        => 'nullable|string',
        'description' => 'nullable|string',
        'status'      => 'nullable|int|min:0|max:4',
        'link'        => 'nullable|url',
        'order'       => 'nullable|int',
        'group_id'    => 'nullable|int',
        'enabled'     => 'nullable|bool',
        'meta'        => 'nullable|array',
        'silent'      => 'nullable|bool',
    ];

    /**
     * Create a new update component command instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     * @param string                            $name
     * @param string                            $description
     * @param int                               $status
     * @param string                            $link
     * @param int                               $order
     * @param int                               $group_id
     * @param bool                              $enabled
     * @param array|null                        $meta
     * @param bool                              $silent
     *
     * @return void
     */
    public function __construct(Component $component, $name, $description, $status, $link, $order, $group_id, $enabled, $meta, $silent)
    {
        $this->component = $component;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->link = $link;
        $this->order = $order;
        $this->group_id = $group_id;
        $this->enabled = $enabled;
        $this->meta = $meta;
        $this->silent = $silent;
    }
}
