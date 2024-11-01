@extends('common')

@section('title')
    Home Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h1>Home Page</h1>
    </div>

    <a class="btn btn-info" href="{{route('profile')}}">Profile</a>

@endsection
