@extends('common')

@section('title')
    Update Tag Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>Update Tag page</h2>
    </div>

    <div class="container">
        @include('tags._parts.form')
    </div>

@endsection

@section('script')
    <script src="/js/index.js" type="module"></script>
@endsection
