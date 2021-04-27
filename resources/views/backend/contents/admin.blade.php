@extends('backend.home')

@section('content')

    <div>
    <!-- Button trigger modal -->
        {{-- <a style="margin-left: 90%" href="#">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Login
            </button>
        </a> --}}
        <div style="margin-left: 300px">
            <h3>President of ABC Mosque</h3>
            <img class="w-50 ml-3" src="https://cdn.iconscout.com/icon/free/png-512/arab-man-1720811-1467061.png" alt="">
        </div>
    </div>



{{-- Modal --}}
    <form method="post" action="">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input name="email" placeholder="Your email" type="email" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" placeholder="password" type="password" class="form-control"
                                id="exampleInputPassword1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
