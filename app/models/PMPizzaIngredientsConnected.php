<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaIngredientsConnected extends Model
{
    protected $table = 'PM_pizza_ingredients_connected';

    protected $fillable = ['id', 'name', 'ingredients_id', 'pizza_id'];
}
