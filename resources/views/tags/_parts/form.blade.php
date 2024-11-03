<form method="post" action="{{$route}}" class="border p-3">
    @csrf

    <div class="mb-3">
        <div class="form-group position-relative @error('name') has-error @enderror">
            <label class="form-label">
                Name tag
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="{{ old('name', $tag->name ?? '') }}" placeholder="Name product">
            </label>

            @error('name')
                <span class="position-absolute" style="color: red;font-size: 13px; bottom: -10px;left: 0;">{{$message}}</span>
            @enderror
        </div>
    </div>

    <button class="btn btn-info" type="submit">Submit</button>
</form>
