<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CompanyScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if ($companyId = auth()->user()->company_id) {
            $builder->where('company_id', $companyId);
        }
    }
}

