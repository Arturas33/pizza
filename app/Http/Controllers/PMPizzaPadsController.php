<?php

namespace App\Http\Controllers;

use App\models\PMPizzaPads;
use Illuminate\Http\Request;

class PMPizzaPadsController extends Controller
{
    public function create()
    {
        $data = request()->all();

        $record = PMPizzaPads::oreate([
            'id'=>uuid::uuid4(),
            'name'=>$data['name'],
            'description'=>$data['description']
        ]);
        return view('pizza', $record->toArray());
    }


    public function showCreated()
    {
        $config = [];

        $config['pads'] = PMPizzaPads::pluck('name', 'id');

        return view('pizza' , $config);

    }

    public function index()
    {
        return PMPizzaPads::get();
    }
}
