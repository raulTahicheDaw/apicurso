<?php
/**
 * Created by PhpStorm.
 * User: ralgo
 * Date: 04/11/2018
 * Time: 17:08
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class BuyerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->has('transactions');
    }
}