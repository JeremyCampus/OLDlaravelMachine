<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BoissonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boissons = Drink::all();

        return view('drinks.welcome', ["boissons" => $boissons]);
        // return view('welcome', []);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.creation');
    }



    public function allListed()
    {
        $mesBoissons = Drink::all();

        return view('drinks.mesBoissons', ["mesBoissons" => $mesBoissons]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drinks = new Drink;
        $drinks->code =  $request->code;
        $drinks->label = $request->nom;
        $drinks->price = $request->prix;
        $drinks-> save();
        $mesBoissons = Drink::all();

        return view('drinks.mesBoissons', ["mesBoissons" => $mesBoissons]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drink = Drink::find($id);
        $data = [
            'drink'=> $drink
        ];
        return view("drinks.details", $data);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drink = Drink::find($id);
        $data = [
            'drink' => $drink,
        ];

        return view('drinks.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $drink = Drink::find($id);

        $drink -> label = $request->DrinkName;
        $drink -> code = $request-> Code;
        $drink -> price = $request->DrinkPrice;
        $drink ->save();

        $mesBoissons = Drink::all();

        return view('drinks.mesBoissons', ["mesBoissons" => $mesBoissons]);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function destroy($boisson)
    {
        $detruit = Drink::destroy($boisson);
        $maBoisson = DB::select("SELECT * FROM drinks");

        $mesBoissons = Drink::all();
        return view('drinks.mesBoissons', ["mesBoissons" => $mesBoissons]);
    }

}
