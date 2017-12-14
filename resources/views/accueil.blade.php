@extends('layouts.base')


@section('title', 'Accueil')
@section('main')

<div class="container-fluid">

    <div class="row">
      <div class="col-lg-7">
        <h1>Test</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        <br>
      </div>


  <div class="col-lg-12">
    <h1>Nos théières</h1>
    <table class="table table-responsive">
      <thead>
        <tr>
          <th scope="col">Modèle</th>
          <th scope="col">Référence</th>
          <th scope="col">Description</th>
          <th scope="col">Prix</th>
          <th scope="col">Disponible dans les boutiques</th>
          <th scope="col">En stock</th>
          <th scope="col">Supprimer</th>
          <th scope="col">Modifier</th>
        </tr>

      @foreach ($theieres as $theiere)
        <tr>
          <td> {{ $theiere->modele }} </td>
          <td> {{ $theiere->reference }} </td>
          <td> {{ $theiere->description }} </td>
          <td> {{ $theiere->prix }} </td>

          @if($theiere->magasins)
            <td>
              @foreach ($theiere->magasins as $magasin)
                {{{ $magasin->magasin }}}
              @endforeach
            </td>
          @else
            <td>Null</td>
          @endif

          <td> {{ $theiere->stock }} </td>

          <td>
            <form action="/theiere/delete/{{$theiere->id}}" method="get">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-outline-danger delete-btn">
               <i class="fa fa-times" aria-hidden="true"></i>
             </button>
           </form>
         </td>
         <td>
          <form action="/theiere/update/{{$theiere->id}}" method="get">
             {{ csrf_field() }}
             <button type="submit" class="btn btn-outline-info delete-btn">
               <i class="fa fa-pencil" aria-hidden="true"></i>
             </button>
           </form>
         </td>

        </tr>
      @endforeach
      <td>
        <form action="insertTheiere" method="get">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-outline-info delete-btn pull-right">
            <i class="fa fa-plus" aria-hidden="true"> </i>
          </button>
        </form>
      </td>
    </table>

  </div>

  <div class="col-lg-12">
    <h1>Nos thés</h1>
    <table class="table table-responsive">
      <thead>
        <tr>
          <th scope="col">Type</th>
          <th scope="col">Marque</th>
          <th scope="col">Description</th>
          <th scope="col">Prix</th>
          <th scope="col">En stock</th>
          <th scope="col">Supprimer</th>
          <th scope="col">Modifier</th>
        </tr>

      @foreach ($thes as $the)
        <tr>

          @if($the->type)
            <td> {{ $the->type->type }} </td>
          @else
            <td> Null</td>
          @endif


          <td> {{ $the->nom }} </td>
          <td> {{ $the->description }} </td>
          <td> {{ $the->prix }} </td>
          <td> {{ $the->stock }} </td>

          <td>
            <form action="/the/delete/{{$the->id}}" method="get">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-outline-danger delete-btn">
               <i class="fa fa-times" aria-hidden="true"></i>
             </button>
           </form>
         </td>
         <td>
           <form action="/the/update/{{$the->id}}" method="get">
             {{ csrf_field() }}
             <button type="submit" class="btn btn-outline-info delete-btn">
               <i class="fa fa-pencil" aria-hidden="true"></i>
             </button>
           </form>
         </td>


        </tr>
      @endforeach
      <td>
        <form action="/insertThe" method="get">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-outline-info delete-btn">
            <i class="fa fa-plus" aria-hidden="true"></i>
          </button>
        </form>
      </td>
    </table>
  </div>



@endsection
