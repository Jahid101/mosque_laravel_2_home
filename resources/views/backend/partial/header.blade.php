<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow m-2 rounded">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 shadow-lg" href="{{route('home')}}">Home</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-dark">Search</button> --}}
    <h1 style="color: white" class="mx-auto"><strong>ABC Mosque</strong></h1>

    <ul class="navbar-nav px-3">
        {{-- <li class="nav-item text-nowrap">

    <!-- Button trigger modal -->
            <a class="nav-link active" href="{{route('loginForm')}}">
                <button class="btn btn-danger shadow-lg">Login</button>
            </a>
        </li> --}}
        <li class="nav-item text-nowrap">
            @auth()

                    <span style="color:white; margin-right: 30px; ">{{ auth()->user()->name }} </span>

                <a class="btn btn-danger" href="{{ route('logout') }}"> Logout</a>

            @else
                <a class="btn btn-danger" href="{{ route('loginForm') }}">Login</a>

            @endauth
        </li>
    </ul>
</header>
