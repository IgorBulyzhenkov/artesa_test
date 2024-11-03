<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Simple header</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('home')}}" class="btn btn-info me-1" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{route('profile')}}" class="btn btn-info me-1">Profile</a></li>
            <li class="list-group-item">
                <a href="{{ route('tags.list') }}" class="btn btn-info" >List Tags</a>
            </li>
            <li class="nav-item"><a href="{{route('logout')}}" class="btn btn-danger">Logout</a></li>
        </ul>
    </header>
</div>
