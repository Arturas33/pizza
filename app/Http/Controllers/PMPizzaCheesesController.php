<?php

namespace App\Http\Controllers;

use App\models\PMPizzaCheeses;
use App\models\PMPizzaIngredients;
use App\models\PMPizzaPads;
use Ramsey\Uuid\Uuid;

class PMPizzaCheesesController extends Controller
{

    public function create()
    {

    }



    public function index()
    {
        return PMPizzaCheeses::get();
    }
}
