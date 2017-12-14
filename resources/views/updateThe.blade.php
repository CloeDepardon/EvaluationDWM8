@extends('layouts.base')


@section('title', 'Nouvelle demande')
@section('main')

  <h1>Modifier le produit </h1> <br>
  {!! Form::open(['url' => 'the/update']) !!}
    {!! Form::hidden('id', $the->id) !!}

    <div class="form-group">
      {{{ Form::label('Type') }}}
      {{{ Form::select('type', $types, $the->type) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('nom', $the->nom) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description', $the->description) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix', $the->prix) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock', $the->stock) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-outline-info'])}}}
    </div>
  {!! Form::close() !!}

@endsection
