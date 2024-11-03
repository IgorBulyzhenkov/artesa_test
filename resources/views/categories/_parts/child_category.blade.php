<li class="list-group-item">
    <p>{{ $child_category->name }}</p>
    @if(!empty($child_category->children))
        <ul class="list-group">
            @foreach ($child_category->children as $child)
                @include('categories._parts.child_category', ['child_category' => $child])
            @endforeach
        </ul>
    @endif
</li>
