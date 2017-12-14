<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\The;
use App\Type;

class TheController extends Controller
{

  public function index()
  {
      $thes = The::all();
      $typesAll = Type::all();
      // pour gérer le formulaire
      $types = []; // array vide
      foreach ($typesAll as $value) {
        $types[$value->id] = $value->type;
      }
      return view('insertThe', ['thes' => $thes, 'types' => $types]);
  }

    public function insertOne(Request $request)
  {
      $the = new The;
      $the->type_id = $request->type;
      $the->nom = $request->nom;
      $the->description = $request->description;
      $the->prix = $request->prix;
      $the->stock = $request->stock;
      $the->save();
      return redirect('/');
  }
   public function deleteOne(Request $request)
  {
   //
   }
  public function updateOne(Request $request)
  {
    //
  }
}
