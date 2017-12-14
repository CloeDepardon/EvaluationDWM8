@extends('layouts.base')


@section('title', 'Nouvelle demande')
@section('main')

  <h1>Insérer une théière </h1> <br>
  {!! Form::open(['url' => 'theiere/insert']) !!}
    <div class="form-group">
      {{{ Form::label('Modèle') }}}
      {{{ Form::text('modele') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Référence') }}}
      {{{ Form::text('reference') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Magasins') }}}
      {{{ Form::select('magasins[]', $magasins, 0, ['multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-outline-info'])}}}
    </div>
  {!! Form::close() !!}

@endsection
