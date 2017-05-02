<?php
/**
 * Created by PhpStorm.
 * User: Artūras Jasinskis
 * Date: 2017.05.02
 * Time: 11:46
 */

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