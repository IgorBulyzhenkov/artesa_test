<form method="post" action="{{$route}}" class="border p-3">
    @csrf

    <div class="mb-3">
        <div class="form-group position-relative @error('name_product') has-error @enderror">
            <label class="form-label">
                Name product
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name_product" value="{{ old('name_product', $product->name ?? '') }}" placeholder="Name product">
            </label>

            @error('name_product')
                <span class="position-absolute" style="color: red;font-size: 13px; bottom: -10px;left: 0;">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group position-relative @error('price') has-error @enderror">
            <label class="form-label position-relative">
                Price
                <input type="number" class="form-control" name="price" placeholder="999" value="{{ old('price', $product->price ?? '') }}">
            </label>
            @error('price')
                <span class="position-absolute" style="color: red;font-size: 13px;bottom: -10px;left: 0;">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group position-relative @error('stock') has-error @enderror">
            <label class="form-label">
                Stock
                <input type="number" class="form-control" name="stock" placeholder="500" value="{{ old('stock', $product->stock ?? '') }}">
            </label>
            @error('stock')
                <span class="position-absolute" style="color: red;font-size: 13px; bottom: -10px;left: 0;">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <select id="tags" name="tags[]" class="form-control" multiple="multiple">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}"
                    {{ (in_array($tag->id, old('tags', isset($product) ? $product->tags->pluck('id')->toArray() : []))) ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <div class="form-group position-relative @error('stock') has-error @enderror">
            <label for="categories" class="form-label w-100">
                Categories
                <select id="categories" name="categories[]" class="form-control" multiple="multiple">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ (in_array($category->id, old('categories',isset($product) ?  $product->categories->pluck('id')->toArray() : []))) ? 'selected' : '' }}
                            {{ $category->name }}
                        </option>

                        @if($category->childrenRecursive->isNotEmpty())
                            @foreach ($category->childrenRecursive as $childCategory)
                                @include('products._parts.child_category', [
                                    'child_category' => $childCategory,
                                    'level' => 1,
                                    'selected' => old('categories', isset($product) ? $product->categories->pluck('id')->toArray() : [])
                                ])
                            @endforeach
                        @endif
                    @endforeach
                </select>
            </label>

            @error('categories')
                <span class="position-absolute" style="color: red;font-size: 13px; bottom: -10px;left: 0;">{{$message}}</span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
