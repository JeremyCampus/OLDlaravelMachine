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

        return view('welcome', ["boissons_in_blade" => $boissons]);
        // return view('welcome', []);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    public function lookMe($id)
    {
        $maBoisson = Drink::find($id);

        return view('Drinks.mesIngredients', ["maBoisson" => $maBoisson]);
    }

    public function allListed()
    {
        $maBoisson = DB::select("SELECT * FROM drinks");

        return view('mesBoissons', ["maBoisson" => $maBoisson]);
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
        $drinks ->code =  $request->code;
        $drinks ->label = $request->nom;
        $drinks ->price = $request->prix;
        $drinks-> save();
        $boissons = DB::select('SELECT * FROM drinks');

        return view('welcome', ["boissons" => $boissons]);

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
        return view("Drinks.mesIngredients", ["data" => $data]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function edit(Boisson $boisson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boisson $boisson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boisson  $boisson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $boisson)
    {
        $maBoisson = app\Drink::destroy($boisson);
    }
}
