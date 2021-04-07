<!doctype html>
<html lang="en">


@include('backend.partial.head')


<body>



    @include('backend.partial.header')



    <div class="container-fluid">
        <div class="row">


            @include('backend.partial.sidebar')


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                {{-- <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 m-auto">ABC Mosque</h1>
                </div> --}}

                <div class="m-3">
                    @yield('content')
                </div>



                {{-- @include('backend.partial.sidebarright') --}}



                {{-- @yield('content') --}}



            </main>
        </div>
    </div>



    @include('backend.partial.script')


</body>

<footer class="text-center mb-3">
    <small> <strong> © 2021 Md Jahid Hasan Anik, All Rights Reserved</strong></small>
</footer>

</html>
