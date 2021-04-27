<style>
    .abcd {
        box-shadow: 1px 1px 40px 10px tomato;
    }

</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3 bg-success mt-3 mb-5 rounded">
        <ul class="nav flex-column">
            {{-- <li class="nav-item shadow-lg">
                <a class="nav-link active" aria-current="page" href={{ Route('admin') }}>
                    <span data-feather="home"></span>
                    <button class="btn btn-success">Admin</button>
                </a>
            </li> --}}
            <li class="nav-item shadow-lg">
                <a class="nav-link" href={{ Route('donate') }}>
                    <span data-feather="file"></span>
                    <button class="btn btn-success">Donate</button>
                </a>
            </li>
            <li class="nav-item shadow-lg">
                <a class="nav-link" href={{ Route('event') }}>
                    <span data-feather="shopping-cart"></span>
                    <button class="btn btn-success">Events</button>
                </a>
            </li>
            <li class="nav-item shadow-lg">
                <a class="nav-link" href={{ Route('announcement') }}>
                    <span data-feather="shopping-cart"></span>
                    <button class="btn btn-success">Announcement</button>
                </a>
            </li>

            <li class="nav-item shadow-lg">
                <a class="nav-link" href={{ Route('mahfil') }}>
                    <span data-feather="bar-chart-2"></span>
                    <button class="btn btn-success">Mahfil</button>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link shadow-lg" href={{ Route('fund') }}>
                    <span data-feather="bar-chart-2"></span>
                    <button class="btn btn-success">Fund</button>
                </a>
            </li>

            <li class="nav-item shadow-lg">
                <a class="nav-link" href={{ Route('commiteeMember') }}>
                    <span data-feather="bar-chart-2"></span>
                    <button class="btn btn-success">Committee<br/>Member</button>
                </a>
            </li>

            <li class="nav-item shadow-lg">
                <a class="nav-link" href={{ Route('about') }}>
                    <span data-feather="layers"></span>
                    <button class="btn btn-success">About</button>
                </a>
            </li>



            {{-- <div class="btn-group dropend">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Others
                </button>

                <ul class="dropdown-menu bg-success"> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link shadow-lg" href={{ Route('fund') }}>
                            <span data-feather="bar-chart-2"></span>
                            <button class="btn btn-success">Fund</button>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-item shadow-lg">
                        <a class="nav-link" href={{ Route('tablighi') }}>
                            <span data-feather="bar-chart-2"></span>
                            <button class="btn btn-success">Tablighi</button>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-item shadow-lg">
                        <a class="nav-link" href={{ Route('maktab') }}>
                            <span data-feather="bar-chart-2"></span>
                            <button class="btn btn-success">Maktab</button>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-item shadow-lg">
                        <a class="nav-link" href={{ Route('food') }}>
                            <span data-feather="bar-chart-2"></span>
                            <button class="btn btn-success">Food</button>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item shadow-lg">
                        <a class="nav-link" href={{ Route('commiteeMember') }}>
                            <span data-feather="bar-chart-2"></span>
                            <button class="btn btn-success">Committee Member</button>
                        </a>
                    </li> --}}

                {{-- </ul>
            </div> --}}

        </ul>
    </div>
</nav>
