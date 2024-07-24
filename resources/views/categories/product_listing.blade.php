@extends('layouts.app')

@section('content')
    <h1>Produits</h1>
    @foreach($categories->produits as $product)
        <p>Nom : {{$categorie->nom}}</p>
        <p>Prix : {{$categorie->prix}}</p>
        <p>Quantité : {{$categorie->quantite}}</p>
        <p>Poids :{{$categorie->poid}}</p>
        <p>Description : {{$categorie->description}}</p>
    @endforeach
@endsection
