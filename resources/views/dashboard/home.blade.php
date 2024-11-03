@extends('common')

@section('title')
    Home Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h1>Home Page</h1>
    </div>

    <div class="container d-flex" style="flex-direction: row-reverse; justify-content: space-around;">
        <ul class="list-group list-group-flush">
            @foreach ($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <input class="form-check-input product-checkbox" type="checkbox" name="check"
                           id="{{ $product->id }}">
                    <p> {{ $product->name }}</p>
                    <p> {{ $product->price }} $</p>
                    <p> Stock: {{ $product->stock }}</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-info">read</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-info">update</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-danger">delete</a>
                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>
        <div class="treeview">
            <ul class="list-group">
                @foreach ($categories as $category)
                    @include('categories._parts.category', ['category' => $category])
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container position-fixed" style="left: 10px;bottom: 20px;">
        <a href="{{route('categories.show', '')}}" class="btn btn-info border hidden" id="action-button">Get
            Categories</a>
    </div>

    <div class="container position-fixed" style="left: 10px;bottom: 20px;">
        <a href="{{route('categories.show_tree', '')}}" class="btn btn-info border hidden" id="action-button_tree">Get
            Categories Tree</a>
    </div>

@endsection

@section('script')
    <script src="/js/index.js" type="module"></script>
@endsection
