<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{
    public $incrementing = false;
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static ::creating(function ($model){
           $model->{$model->getKeyName()} = uuid::uuid4();
        });
    }
}