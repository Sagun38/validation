@extends('layouts.app')

@section('content')

  <div class="titleContainer"><h2 class="titlePage">Bienvenue sur la page Contact</h2></div>
  <div class="mainContainer mid">
    {{ Form::open(['url' => '/contact']) }}
    {{ Form::label('Nom :')}}
    <br>
    {{ Form::text('name')}}
    <br>
    {{ Form::label('Email :')}}
    <br>
    {{ Form::text('email')}}
    <br>
    {{ Form::label('Message :')}}
    <br>
    {{ Form::textarea('content') }}
    <br>
    {{Form::submit('Valider')}}
    {{ Form::close() }}
  </div>

@endsection
