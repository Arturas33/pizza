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
    $data = request()->all();

    $record = PMPizzaCheeses::oreate([
      'id'=>uuid::uuid4(),
        'name'=>$data['name'],
        'description'=>$data['description']
    ]);
    return view('pizza', $record->toArray());
    }


    public function showCreated()
    {
        $config = [];

        $config['chees'] = PMPizzaCheeses::pluck('name', 'id');
        $config['ingredients'] = PMPizzaIngredients::pluck('name', 'id');
        $config['pads'] = PMPizzaPads::pluck('name', 'id');

       return view('pizza' , $config);

    }

    public function index()
    {
        return PMPizzaCheeses::get();
    }
}
