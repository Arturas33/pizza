<?php

namespace App\models;



class PMPizzaCheeses extends CoreModel
{
    protected $table = 'PM_pizza_cheeses';

    protected $fillable = ['id', 'name', 'description', 'calories'];

    public static function get()
    {
    }
}
