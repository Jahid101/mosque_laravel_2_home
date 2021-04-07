@extends('backend.home')

@section('content')

    <h1>Donate</h1>

    {{-- <img class=" w-50" src="https://mycfh.info/wp-content/uploads/2020/07/donate-1.jpg" alt=""> --}}


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Donate
    </button>


    <table class="table table-dark table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">DonationAmount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donates as $data)

                <tr>
                    <th scope="row">1</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->donationAmount}}</td>
                </tr>

            @endforeach
        </tbody>

    </table>



    <!-- Modal -->
    <form method="post" action="{{ route('donate.list') }}">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> --}}
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input name="name" placeholder="Your name" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Donation Amount</label>
                            <input name="donationAmount" placeholder="Donation Amount" type="number" class="form-control"
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
