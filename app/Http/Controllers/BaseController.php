<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theiere as Theiere;
use App\The as The;
use App\Type as Type;
use App\Reference as Reference;



class BaseController extends Controller
{
  public function index()
    	{
        $theieres = Theiere::all();
        $thes = The::all();
        $typesAll = Type::all();
        // pour gérer le formulaire
        $types = []; // array vide
        foreach ($typesAll as $value) {
          $types[$value->id] = $value->type; // on met les types dans l'array
        }

      	return view('accueil', ['theieres' => $theieres, 'thes' => $thes, 'types' => $types]);
    	}







}
