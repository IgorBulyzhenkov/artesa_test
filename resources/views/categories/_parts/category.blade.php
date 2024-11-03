<li class="list-group-item node-treeview3">
    {{ $category->name }}
    <input type="checkbox" class="form-check-input category-checkbox" name="checkCategory"
           id="{{ $category->id }}">
    @if ($category->childrenRecursive->isNotEmpty())
        <ul class="list-group">
            @foreach ($category->childrenRecursive as $childCategory)
                @include('categories._parts.category', ['category' => $childCategory])
            @endforeach
        </ul>
    @endif

</li>
