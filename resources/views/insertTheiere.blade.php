@extends('layouts.base')


@section('title', 'Nouvelle demande')
@section('main')

<div class="gestion Insert">
  <h1>Insérer une théière </h1> <br>
  {!! Form::open(['url' => 'theiere/insert']) !!}
    <div class="form-group">
      {{{ Form::label('Modèle') }}}
      {{{ Form::text('modele', '', ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Référence') }}}
      {{{ Form::text('reference', '', ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description', '', ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix', '', ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock', '', ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Magasins') }}}
      {{{ Form::select('magasins[]', $magasins, 0, ['multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-primary'])}}}
    </div>
  {!! Form::close() !!}
</div>


@endsection
