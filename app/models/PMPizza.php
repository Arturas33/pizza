<?php

namespace App\models;

class PMPizza extends CoreModel
{
    protected $table = 'PM_pizza';

    protected  $fillable = ['id', 'pads_id', 'cheeses_id', 'contacts'];

    public function pads()
    {
        return $this->hasOne(PMPizzaPads::class, 'id ', 'pads_id');
    }

    public function cheeses_id()
    {
        return $this->hasOne(PMPizzaCheeses::class, 'id', 'cheeses_id');
    }

    public function pmPizzaIngredientsConnected()
    {
        return $this->hasMany(PMPizzaIngredientsConnected::class, ' pizza_id', 'id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(PMPizzaIngredients::class, 'PM_pizza_ingredients_connected', 'pizza_id', 'ingredients_id');
    }
}