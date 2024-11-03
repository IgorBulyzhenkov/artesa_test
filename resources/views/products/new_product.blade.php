@extends('common')

@section('title')
    New Product Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>New Product  page</h2>
    </div>

    <div class="container">
        @include('products._parts.form')
    </div>

@endsection

@section('script')
    <script src="/js/index.js" type="module"></script>
@endsection
