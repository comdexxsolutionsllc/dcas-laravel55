<?php

namespace App;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Rogercbe\TableSorter\Sortable;
use ZigaStrgar\Orderable\Orderable;
use Watson\Rememberable\Rememberable;
use DCAS\Traits\ProvidesModelCacheKey;
use Spatie\ModelCleanup\GetsCleanedUp;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;
use Bluora\LaravelModelTraits\OrderByTrait;
use Nicolaslopezj\Searchable\SearchableTrait;
use Bluora\LaravelModelTraits\ModelStateTrait;
use Bluora\LaravelModelTraits\ModelEventsTrait;
use Bluora\LaravelModelTraits\ModelValidationTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Generic Model Class.
 */
abstract class Model extends Eloquent implements GetsCleanedUp
{
    use HasTranslations, ModelEventsTrait, ModelStateTrait, ModelValidationTrait,
        Orderable, OrderByTrait, ProvidesModelCacheKey, Rememberable, Searchable, SearchableTrait,
        Sortable;

    /**
     * Search as you type.
     * TNT/Scout.
     *
     * @var bool
     */
    public $asYouType = true;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [];

    /**
     *  All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = [];

    /**
     * @param Builder $query
     * @return Builder
     */
    public static function cleanUp(Builder $query): Builder
    {
        return $query->where('created_at', '<', Carbon::now()->subYear());
    }

    /**
     * Show the last record of the given model.
     *
     * @return $this
     */
    protected static function last()
    {
        return static::orderBy('id', 'desc')->limit(1)->get();
    }

    /**
     * Return orderable array.
     *
     * @return array
     */
    public function orderable(): array
    {
        return [
            'id' => 'ASC',
        ];
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    abstract public function searchableAs();

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        // TODO:  Customize array.

        return $array;
    }
}
