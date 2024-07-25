
@extends('layouts.app')

@section ('content')
    <h1>Catégories</h1>
    <section>
        <a href="{{route('category.store')}}" class="btn btn-info btn-sm">Ajouter une catégorie</a>
    </section>
    <section>
    @foreach($category as $categories)

        <h2>{{$categories->name}} </h2>
        <a href="{{route('category.show', $categories->id )}}" class="btn btn-info btn-sm">Voir les produits</a>
    @endforeach
    </section>

@endsection
