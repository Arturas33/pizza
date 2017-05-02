<?php

namespace App\models;



class PMPizzaConnected extends CoreModel
{
    protected $table = 'PM_pizza_connected';

    protected  $fillable = ['id', 'pads_id', 'ingredients_id', 'cheeses_id'];
}
