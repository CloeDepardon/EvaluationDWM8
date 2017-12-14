@extends('layouts.base')


@section('title', 'Nouvelle demande')
@section('main')

  <h1>Insérer un thé </h1> <br>
  {!! Form::open(['url' => 'the/insert']) !!}
    <div class="form-group">
      {{{ Form::label('Type') }}}
      {{{ Form::select('types[]', $types) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('nom') }}}
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
      {{{ Form::submit('Insérer', ['class' => 'btn btn-outline-info'])}}}
    </div>
  {!! Form::close() !!}

@endsection
