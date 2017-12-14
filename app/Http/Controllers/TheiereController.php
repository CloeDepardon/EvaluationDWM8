<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theiere;
use App\Reference;
use App\Magasin;

class TheiereController extends Controller
{

  public function index()
  {
      $theieres = Theiere::all();
      $referencesAll = Reference::all();
      // pour gérer le formulaire
      $references = []; // array vide
      foreach ($referencesAll as $value) {
        $references[$value->id] = $value->reference; // on met les références dans l'array
      }
      $magasinsAll = Magasin::all();
      // pour gérer le formulaire
      $magasins = []; // array vide
      foreach ($magasinsAll as $value) {
        $magasins[$value->id] = $value->magasin; // on met les genders dans l'array
      }
      return view('insertTheiere', ['theieres' => $theieres, 'references' => $references, 'magasins' => $magasins]);
  }

    public function insertOne(Request $request)
  {
      $theiere = new Theiere;
      $theiere->modele = $request->modele;
      $theiere->description = $request->description;
      $theiere->prix = $request->prix;
      $theiere->stock = $request->stock;
      $theiere->reference = $request->reference;
      $theiere->save();


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
