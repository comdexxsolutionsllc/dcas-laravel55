<?php

namespace Modules\SupportDesk\Models;

use App\Model;

/**
 * Modules\SupportDesk\Models\NullTag
 *
 * @property-read string $is_active
 * @property-read string $is_archived
 * @property-read string $is_deleted
 * @property-read string $is_removed
 * @property-read string $state_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model mode($mode = '0')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model onlyActive($type = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model onlyArchived($type = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model onlyDeleted($type = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model order($field = '', $direction = '')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model sortable($defaultSortColumn = null, $direction = 'asc')
 * @mixin \Eloquent
 */
class NullTag extends Model
{
    /**
     * @var int
     */
    protected $id = 0;

    /**
     * @var string
     */
    protected $name = 'Null Name';

    /**
     * @var string
     */
    protected $slug = 'null-slug';

    /**
     * @var string
     */
    protected $type = 'null-type';

    /**
     * @var int
     */
    protected $order_column = 0;

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'nulltags_index';
    }

    /**
     * Get ID from database.
     *
     * @return int
     */
    protected function getIdAttribute(): int
    {
        return $this->id;
    }

    /**
     * Get Name from database.
     *
     * @return string
     */
    protected function getNameAttribute(): string
    {
        return $this->name;
    }

    /**
     * Get Slug from Database.
     *
     * @return string
     */
    protected function getSlugAttribute(): string
    {
        return $this->slug;
    }

    /**
     * Get Type from database.
     *
     * @return string
     */
    protected function getTypeAttribute(): string
    {
        return $this->type;
    }

    /**
     * Get Order Column from database.
     *
     * @return int
     */
    protected function getOrderColumnAttribute(): int
    {
        return $this->order_column;
    }
}
