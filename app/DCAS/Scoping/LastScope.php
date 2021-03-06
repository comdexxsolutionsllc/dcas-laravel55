<?php

namespace DCAS\Scoping;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class LastScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param \Illuminate\Database\Eloquent\Builder    $builder
     * @param \Illuminate\Database\Eloquent\Model|null $model
     */
    public function apply(Builder $builder, ?Model $model)
    {
        $builder->orderBy('id', 'desc')->limit(1);
    }
}
