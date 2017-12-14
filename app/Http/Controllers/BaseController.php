<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theiere as Theiere;
use App\The as The;
use App\Type as Type;
use App\Reference as Reference;
use App\Magasin as Magasin;



class BaseController extends Controller
{

  public function index()
    	{

      	return view('accueil');
    	}

  public function gestion()
    	{
        $theieres = Theiere::all();
        $thes = The::all();
        $typesAll = Type::all();
        $magasinsAll = Magasin::all();
        // pour gérer le formulaire
        $types = []; // array vide
        foreach ($typesAll as $value) {
          $types[$value->id] = $value->type; // on met les types dans l'array
        }
        $magasins = [];
        foreach ($magasinsAll as $value) {
          $magasins[$value->id] = $value->magasin;
        }
      	return view('gestion', ['theieres' => $theieres, 'thes' => $thes, 'types' => $types, 'magasins' => $magasins]);
    	}

}
