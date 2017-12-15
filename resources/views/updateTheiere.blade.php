@extends('layouts.base')


@section('title', 'Modifier')
@section('main')

<div class="gestion">
  <h1>Modifier le produit </h1> <br>
  {!! Form::open(['url' => '/theiere/update']) !!}
    {!! Form::hidden('id', $theiere->id) !!}

    <div class="form-group">
      {{{ Form::label('Modèle') }}}
      {{{ Form::text('modele', $theiere->modele) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Référence') }}}
      {{{ Form::text('reference', $theiere->reference) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description', $theiere->description) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix', $theiere->prix) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock', $theiere->stock) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Magasins') }}}
      {{{ Form::select('magasins[]', $magasins, $theiere->magasins, ['multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-primary'])}}}
    </div>
  {!! Form::close() !!}

</div>

@endsection
