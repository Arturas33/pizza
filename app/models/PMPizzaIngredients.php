<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaIngredients extends CoreModel
{
    protected $table = 'PM_pizza_ingredients';

    protected $fillable = ['id', 'name', 'description', 'calories'];

}