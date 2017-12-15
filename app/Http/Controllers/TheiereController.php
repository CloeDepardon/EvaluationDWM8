<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theiere;
use App\Magasin;

class TheiereController extends Controller
{

  public function index()
  {
      
      $theieres = Theieres::all();
      $magasinsAll = Magasin::all();
      // pour gérer le formulaire
      $magasins = []; // array vide
      foreach ($magasinsAll as $value) {
        $magasins[$value->id] = $value->magasin;
      }
      return view('insertTheiere', ['theieres' => $theieres, 'magasins' => $magasins]);
  }

    public function insertOne(Request $request)
  {
      $theiere = new Theiere;
      $theiere->modele = $request->modele;
      $theiere->description = $request->description;
      $theiere->reference = $request->reference;
      $theiere->prix = $request->prix;
      $theiere->stock = $request->stock;
      $theiere->save();
      $theiere->magasins()->attach($request->magasins);
      return redirect('/gestion');
  }


    public function deleteOne(Request $request, $id)
    {
      $theiere = Theiere::find($id);
      $theiere->magasins()->detach(); //Enlève les entrées dans la table intermédiaire ! IMPORTANT !
      $theiere->delete();
      return redirect ('/gestion');
    }


   public function updateOne(Request $request, $id)
   {
     $theiere = Theiere::find($id);
     $magasinsAll = Magasin::all();
     // pour gérer le formulaire
     $magasins = []; // array vide
     foreach ($magasinsAll as $value) {
       $magasins[$value->id] = $value->magasin;
     }
     return view('updateTheiere', ['magasins' => $magasins, 'theiere' => $theiere]);
   }

   public function updateOneAction (Request $request)
   {
     $theiere = Theiere::find($request->id);
     $theiere->modele = $request->modele;
     $theiere->description = $request->description;
     $theiere->reference = $request->reference;
     $theiere->prix = $request->prix;
     $theiere->stock = $request->stock;
     $theiere->magasins()->detach();
     $theiere->magasins()->attach($request->magasins);
     $theiere->save();
     return redirect('/gestion');
   }



}
