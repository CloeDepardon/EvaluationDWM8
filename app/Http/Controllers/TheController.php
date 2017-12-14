<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\The;
use App\Type;
use App\Magasin;

class TheController extends Controller
{

  public function index()
  {
      $thes = The::all();
      $typesAll = Type::all();
      $magasinsAll = Magasin::all();
      // pour gérer le formulaire
      $types = []; // array vide
      foreach ($typesAll as $value) {
        $types[$value->id] = $value->type;
      }
      $magasins = [];
      foreach ($magasinsAll as $value) {
        $magasins[$value->id] = $value->magasin;
      }
      return view('insertThe', ['thes' => $thes, 'types' => $types, 'magasins' => $magasins]);
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
      $the->magasins()->attach($request->magasins);
      return redirect('/gestion');
  }

  public function deleteOne(Request $request, $id)
  {
    $the = The::find($id);
    $the->magasins()->detach(); //Enlève les entrées dans la table intermédiaire ! IMPORTANT !
    $the->delete();
    return redirect ('/gestion');
  }


  public function updateOne(Request $request, $id)
  {
    $the = The::find($id);
    $typesAll = Type::all();
    $magasinsAll = Magasin::all();
    // pour gérer le formulaire
    $types = []; // array vide
    foreach ($typesAll as $value) {
      $types[$value->id] = $value->type;
    }
    $magasins = [];
    foreach ($magasinsAll as $value) {
      $magasins[$value->id] = $value->magasin;
    }
    return view('updateThe', ['types' => $types, 'the' => $the, 'magasins'=>$magasins]);
  }

  public function updateOneAction (Request $request)
  {
    $the = The::find($request->id);
    $the->type_id = $request->type;
    $the->nom = $request->nom;
    $the->description = $request->description;
    $the->prix = $request->prix;
    $the->stock = $request->stock;
    $the->magasins()->detach();
    $the->magasins()->attach($request->magasins);
    $the->save();
    return redirect('/gestion');
  }



}
