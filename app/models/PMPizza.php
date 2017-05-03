<?php

namespace App\models;



class PMPizza extends CoreModel
{
    protected $table = 'PM_pizza';

    protected  $fillable = ['id', 'pads_id', 'cheeses_id', 'contacts'];
}
