@extends('layouts.app')

@section('content')

  <div class="titleContainer"><h2 class="titlePage">Nos Produits</h2></div>
  <div class="mainContainer">
    @foreach ($produits as $produit)
      <div class="blockProduit">
        @if(Auth::user())
        ​<a class="btn-delete" href='/produit/{{ $produit->id }}/delete'>X</a>
        @endif
        <div class="containerImg">
          <img class="imgProduit" src="img/{{$produit->image}}">
        </div>
        <h4 class="nomProduit">{{$produit->nom}}</h4>
        <p class="descriptionProduit"><u><strong>Description :</strong></u> {{$produit->description}}</p>
        <p class="prixProduit">Prix: {{$produit->prix}}€</p>
      </div>
        <br>
    @endforeach
  </div>

@endsection
