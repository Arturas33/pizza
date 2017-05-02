<?php

namespace App\Http\Controllers;

use App\models\PMPizzaIngredients;
use Ramsey\Uuid\Uuid;


class PMPizzaIngredientsController extends Controller
{

    public function create()
    {
        $data = request()->all();

        $record = PMPizzaIngredients::oreate([
            'id'=>uuid::uuid4(),
            'name'=>$data['name'],
            'description'=>$data['description']
        ]);
        return view('pizza', $record->toArray());
    }


    public function showCreated()
    {
        $config = [];

        $config['ingredients'] = PMPizzaIngredients::pluck('name', 'id');

        return view('pizza' , $config);

    }

    public function index()
    {
        return PMPizzaIngredients::get();
    }
}
