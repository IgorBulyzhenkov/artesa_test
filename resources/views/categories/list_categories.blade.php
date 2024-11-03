@extends('common')

@section('title')
    Categories Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h1>Categories Page</h1>
    </div>

    <div class="container">
        <ul class="list-group list-group-flush">
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <p>Категория: <b>{{ $category['category']->name }}</b> </p>
                    <p>Продукты: <b>{{ $category['products'][0] }}</b></p>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
