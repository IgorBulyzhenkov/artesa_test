@extends('common')

@section('title')
    Categories Tree Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h1>Categories Tree Page</h1>
    </div>

    <div class="container">
        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item">
                    <p>{{ $category->name }}</p>
                    @if(!empty($category->children))
                        <ul class="list-group">
                            @foreach ($category->children as $childCategory)
                                @include('categories._parts.child_category', ['child_category' => $childCategory])
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

@endsection
