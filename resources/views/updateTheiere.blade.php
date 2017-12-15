@extends('layouts.base')


@section('title', 'Modifier')
@section('main')

<div class="gestion Insert">
  <h1>Modifier le produit </h1> <br>
  {!! Form::open(['url' => '/theiere/update']) !!}
    {!! Form::hidden('id', $theiere->id) !!}

    <div class="form-group">
      {{{ Form::label('Modèle') }}}
      {{{ Form::text('modele', $theiere->modele,  ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Référence') }}}
      {{{ Form::text('reference', $theiere->reference,  ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description', $theiere->description,  ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix', $theiere->prix,['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock', $theiere->stock,  ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Magasins') }}}
      {{{ Form::select('magasins[]', $magasins, $theiere->magasins, ['required' => 'required', 'multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Modifier', ['class' => 'btn btn-primary'])}}}
    </div>
  {!! Form::close() !!}

</div>

@endsection
