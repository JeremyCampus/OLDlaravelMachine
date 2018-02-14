<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class monControleur extends Controller
{
  public function index()
  {
    return view('welcome');
  }
    public function ingredients()
    {
        return view('ingredients');
    }

    public function boissons()
    {
        return view('drinks/boissons');
    }
  public function recettes()
  {
    return view('recettes');
  }
  public function materiel()
  {
    return view('materiel');
  }
  public function monnayeur()
  {
    return view('monnayeur');
  }

  public function list()
  {
  }

  public function mesIngredients($id)
  {
//    $maBoisson = DB::select("SELECT * FROM boissons WHERE CODE = '$id'");
//
//    return view('mesIngredients', ["maBoisson"=>$maBoisson]);
//    // return view('welcome');
  }

}











//
