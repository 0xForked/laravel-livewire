<?php

namespace App\Http\Filters\ContactParams;

use Illuminate\Database\Eloquent\Builder;
use App\Http\Filters\Params;

class SearchParamImpl implements Params
{

    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        if (is_null($value)) return $builder;
        return $builder->where('name', 'LIKE', "%$value%");
    }

}