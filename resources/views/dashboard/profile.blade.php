@extends('common')

@section('title')
    Profile Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>Welcome {{ Auth::user()->name }}</h2>
    </div>

@endsection

@section('script')

@endsection
