@extends('layouts.app')

@section('content')

  <div class="titleContainer"><h2 class="titlePage">Pour nous contacter</h2></div>
  <div class="mainContainer mid">
    <h3>Localisation:</h3>
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.0452955591245!2d4.861604016030036!3d45.770282479105774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea85718bc503%3A0xe33fb4a36aa61dca!2s6+Place+Charles+Hernu%2C+69100+Villeurbanne!5e0!3m2!1sfr!2sfr!4v1486731922922"frameborder="0" style="border:0" allowfullscreen></iframe>
    <p class="phoneNumber"><img style="height:25px;" src="http://www.initiaact.com/wp-content/uploads/2015/01/LOGO-T%C3%A9l%C3%A9phone.jpeg" alt="télephone"> 04 06 04 06 04</p>
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
