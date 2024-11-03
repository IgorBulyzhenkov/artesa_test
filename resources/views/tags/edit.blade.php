@extends('common')

@section('title')
    Edit Tag Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>Edit Tag Page</h2>
    </div>

    <div class="container">
        <h3> {{ $tag->name }} </h3>
    </div>

@endsection
