@extends('layouts.base')


@section('title', 'Nouvelle demande')
@section('main')

<div class="gestion Insert">
  <h1>Modifier le produit </h1> <br>
  {!! Form::open(['url' => 'the/update']) !!}
    {!! Form::hidden('id', $the->id) !!}

    <div class="form-group">
      {{{ Form::label('Type') }}}
      {{{ Form::select('type', $types, $the->type,  ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('nom', $the->nom, ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Référence') }}}
      {{{ Form::text('reference', $the->reference, ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description', $the->description,  ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix', $the->prix,  ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock', $the->stock,  ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Magasins') }}}
      {{{ Form::select('magasins[]', $magasins, $the->magasins, ['required' => 'required', 'multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Modifier', ['class' => 'btn btn-primary'])}}}
    </div>
  {!! Form::close() !!}
</div>


@endsection
