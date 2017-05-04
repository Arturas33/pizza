<?php namespace App\Http\Controllers;

use App\models\PMPizza;
use App\models\PMPizzaCheeses;
use App\models\PMPizzaIngredients;
use App\models\PMPizzaPads;

class PMPizzaController extends Controller
{


    function getFormData()
    {
        $config = [];

        $config['chees'] = PMPizzaCheeses::pluck('name', 'id');
        $config['ingredients'] = PMPizzaIngredients::pluck('name', 'id');
        $config['pads'] = PMPizzaPads::pluck('name', 'id');

        return $config;

    }

    /**
     * Display a listing of the resource.
     * GET /pmpizza
     *
     * @return Response
     */
    public function index()
    {
        return PMPizza::get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmpizza/create
     *
     * @return Response
     */
    public function create()
    {

        $config = $this->getFormData();

        return view('pizza', $config);

    }

    /**
     * Store a newly created resource in storage.
     * POST /pmpizza
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->all();

        $record = PMPizza::create([
            'pads_id' => $data['pads_id'],
            'cheeses_id' => $data['cheeses_id'],
            'contacts' => $data['contacts']
        ]);

        $record->ingredients()->sync($data['ingredients']);

        $config = $this->getFormData();

        return view('pizza', $config->toArray());
    }

    /**
     * Display the specified resource.
     * GET /pmpizza/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmpizza/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /pmpizza/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /pmpizza/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}