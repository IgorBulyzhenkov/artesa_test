@extends('common')

@section('title')
    List Tags Page
@endsection

@section('content')

    <div class="container mb-3 mt-3">
        <h2>List Tags Page</h2>
    </div>

    <div class="container d-flex" style="flex-direction: row-reverse; justify-content: space-around;">

        <ul class="list-group list-group-flush">
            @foreach ($tags as $tag)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <p>{{ $tag->name }}</p>
                    <ul class="list-group list-group-flush d-flex flex-row">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-info">edit</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('tags.updatePage', $tag->id) }}" class="btn btn-info">update</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>

    </div>

@endsection
