<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use AltThree\Validator\ValidatingTrait;
use CachetHQ\Cachet\Models\Traits\SearchableTrait;
use CachetHQ\Cachet\Models\Traits\SortableTrait;
use CachetHQ\Cachet\Presenters\IncidentPresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the incident model.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Joseph Cohen <joseph@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class Incident extends Model implements HasPresenter
{
    use SearchableTrait, SoftDeletes, SortableTrait, ValidatingTrait;

    /**
     * Status for incident being investigated.
     *
     * @var int
     */
    const INVESTIGATING = 1;

    /**
     * Status for incident having been identified.
     *
     * @var int
     */
    const IDENTIFIED = 2;

    /**
     * Status for incident being watched.
     *
     * @var int
     */
    const WATCHED = 3;

    /**
     * Status for incident now being fixed.
     *
     * @var int
     */
    const FIXED = 4;

    /**
     * The accessors to append to the model's array form.
     *
     * @var string[]
     */
    protected $appends = [
        'is_resolved',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'visible'     => 'int',
        'stickied'    => 'bool',
        'occurred_at' => 'datetime',
        'deleted_at'  => 'date',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'component_id',
        'name',
        'status',
        'visible',
        'stickied',
        'message',
        'occurred_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'component_id' => 'nullable|int',
        'name'         => 'required|string',
        'status'       => 'required|int',
        'visible'      => 'required|bool',
        'stickied'     => 'required|bool',
        'message'      => 'required|string',
    ];

    /**
     * The searchable fields.
     *
     * @var string[]
     */
    protected $searchable = [
        'id',
        'component_id',
        'name',
        'status',
        'visible',
        'stickied',
    ];

    /**
     * The sortable fields.
     *
     * @var string[]
     */
    protected $sortable = [
        'id',
        'name',
        'status',
        'visible',
        'stickied',
        'message',
        'occurred_at',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = [
        'meta',
        'updates',
    ];

    /**
     * Get the component relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function component()
    {
        return $this->belongsTo(Component::class, 'component_id', 'id');
    }

    /**
     * Get all of the meta relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function meta()
    {
        return $this->morphMany(Meta::class, 'meta');
    }

    /**
     * Get the updates relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function updates()
    {
        return $this->hasMany(IncidentUpdate::class)->orderBy('created_at', 'desc');
    }

    /**
     * Finds all visible incidents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible(Builder $query)
    {
        return $query->where('visible', '=', 1);
    }

    /**
     * Finds all stickied incidents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStickied(Builder $query)
    {
        return $query->where('stickied', '=', true);
    }

    /**
     * Is the incident resolved?
     *
     * @return bool
     */
    public function getIsResolvedAttribute()
    {
        if ($updates = $this->updates->first()) {
            return (int) $updates->status === self::FIXED;
        }

        return (int) $this->status === self::FIXED;
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return IncidentPresenter::class;
    }
}
