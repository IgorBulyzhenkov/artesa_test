@extends('common')

@section('title')
    Profile Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>Welcome {{ Auth::user()->name }}</h2>
    </div>

    <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    <a class="btn btn-info" href="{{route('home')}}">Home</a>

@endsection

@section('script')

@endsection
