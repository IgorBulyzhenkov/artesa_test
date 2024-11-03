@extends('common')

@section('title')
    New Tag Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>New Tag page</h2>
    </div>

    <div class="container">
        @include('tags._parts.form')
    </div>

@endsection
