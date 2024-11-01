@extends('common')

@section('title')
    Login Page
@endsection

@section('content')
    <div class="container position-relative">
        <div class="position-absolute end-0" id="liveAlertPlaceholder"></div>
    </div>
    <div class="container mb-3 mt-3">
        <h1>Login page</h1>
    </div>
    <div class="container">
        <form id="form_login" class="border p-3">
            <div class="mb-3">
                <label for="name" class="form-label">User name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="user_name" placeholder="User Name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('script')
    @include('scripts.login')
@endsection
