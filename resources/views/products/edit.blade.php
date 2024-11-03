@extends('common')

@section('title')
    Edit Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>Edit page</h2>
    </div>

    <div class="container">
        <h3> {{ $product->name }} </h3>
        <p> Price: {{ $product->price }} $</p>
        <p> Stock: {{ $product->stock }}</p>
    </div>

@endsection
