<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaPads extends Model
{
    protected $table = 'PM_pizza_pads';

    protected $fillable = ['id', 'name', 'description'];
}
