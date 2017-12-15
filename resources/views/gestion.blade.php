@extends('layouts.base')


@section('title', 'Gestion')
@section('main')

  <div class="page2">

    <div class="container gestion">
      <div class="row">


        <div class="col-lg-2"> </div>
        <div class="col-lg-8">
          <h4> Bienvenue sur l'interface de gestion des stocks du magasin. </h4>
          <p> Choisissez une gamme de produits pour avoir accès à la liste des stocks, la modifier ou y ajouter des éléments.</p>
          <br>
        </div>
        <div class="col-lg-2"> </div>


        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-4"
            <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseTheieres" aria-expanded="false" aria-controls="collapseTheieres">
                Nos théières
              </a>
            </p>
          </div>
          <div class="col-lg-4"> </div>
        </div>

        <div class="collapse" id="collapseTheieres">
          <div class="card card-body">

            <input type="text" id="searchbar" onkeyup="searchBar()" placeholder="Vous cherchez une référence particulière ?"> <br>

            <table id="myTable" class="table table-responsive">
              <thead>
                <tr>
                  <th class="align-middle" scope="col">Modèle</th>
                  <th class="align-middle" scope="col">Référence</th>
                  <th class="align-middle" scope="col">Description</th>
                  <th class="align-middle" scope="col">Prix</th>
                  <th class="align-middle" scope="col">Stock</th>
                  <th class="align-middle" scope="col">Disponible dans les boutiques</th>
                  <th class="align-middle" scope="col">Supprimer</th>
                  <th class="align-middle" scope="col">Modifier</th>
                </tr>

                @foreach ($theieres as $theiere)
                  <tr>
                    <td> {{ $theiere->modele}} </td>
                    <td> {{ $theiere->reference }} </td>
                    <td> {{ $theiere->description }} </td>
                    <td> {{ $theiere->prix }} </td>
                    <td> {{ $theiere->stock }} </td>
                    @if($theiere->magasins)
                      <td>
                        @foreach ($theiere->magasins as $magasin)
                          {{{ $magasin->magasin }}}
                        @endforeach
                      </td>
                    @else
                      <td>Null</td>
                    @endif
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
                        <button type="submit" class="btn btn-outline-info update-btn">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                      </form>
                    </td>

                  </tr>
                @endforeach

              </table>

              <div class= "col-lg-12">
                <form action="insertTheiere" method="get">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-outline-secondary insert-btn pull-right">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </form>
              </div>

            </div>
          </div>
        </div>


        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-4">
              <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Nos thés
                </a>
              </p>
            </div>
            <div class="col-lg-4"> </div>
          </div>


          <div class="collapse" id="collapseExample">
            <div class="card card-body">

              <input type="text" id="searchbar2" onkeyup="searchBar2()" placeholder="Vous cherchez une référence particulière ?"> <br>

              <table id="myTable2" class="table table-responsive">
                <thead>
                  <tr>
                    <th class="align-middle" scope="col">Type</th>
                    <th class="align-middle" scope="col">Marque</th>
                    <th class="align-middle" scope="col">Référence</th>
                    <th class="align-middle" scope="col">Description</th>
                    <th class="align-middle" scope="col">Prix</th>
                    <th class="align-middle" scope="col">Stock</th>
                    <th class="align-middle" scope="col">Disponible dans les boutiques</th>
                    <th class="align-middle" scope="col">Supprimer</th>
                    <th class="align-middle" scope="col">Modifier</th>
                  </tr>

                  @foreach ($thes as $the)
                    <tr>
                      @if($the->type)
                        <td> {{ $the->type->type }} </td>
                      @else
                        <td> Null</td>
                      @endif

                      <td> {{ $the->nom }} </td>
                      <td> {{ $the->reference }} </td>
                      <td> {{ $the->description }} </td>
                      <td> {{ $the->prix }} </td>
                      <td> {{ $the->stock }} </td>

                      @if($the->magasins)
                        <td>
                          @foreach ($the->magasins as $magasin)
                            {{{ $magasin->magasin }}}
                          @endforeach
                        </td>
                      @else
                        <td>Null</td>
                      @endif
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
                          <button type="submit" class="btn btn-outline-info update-btn">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                          </button>
                        </form>
                      </td>


                    </tr>
                  @endforeach

                </table>

                <div class="col-lg-12">
                  <form action="/insertThe" method="get">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-secondary insert-btn pull-right">
                      <i class="fa fa-plus" aria-hidden="true"> </i>
                    </button>
                  </form>
                </div>



              </div>
            </div>
          </div>
        </div>


      @endsection
