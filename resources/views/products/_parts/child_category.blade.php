<option value="{{ $child_category->id }}"
    {{ in_array($child_category->id, $selected) ? 'selected' : '' }}>
    {{ str_repeat('-', $level) }} {{ $child_category->name }}
</option>

@if($child_category->childrenRecursive->isNotEmpty())
    @foreach($child_category->childrenRecursive as $nestedChild)
        @include('products._parts.child_category', [
            'child_category' => $nestedChild,
            'level' => $level + 1,
            'selected' => $selected
        ])
    @endforeach
@endif
