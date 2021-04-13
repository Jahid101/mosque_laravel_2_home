@extends('backend.home')

@section('content')


    <!-- Button trigger modal -->
    <a style="margin-left: 80%" href="#">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Announcement
        </button>
    </a>



    <table class="table table-light table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Announcement Title</th>
                <th scope="col">Announcement Details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announcementList as $key => $data)

                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->announcementDetails }}</td>
                    <td>
                        <a class="btn btn-secondary" href="">View</a>

                        <a class="btn btn-success" href="{{route('update.announcement', $data['id'])}}">Update</a>

                        <a class="btn btn-danger" href="{{route('delete.announcement', $data['id'])}}">Delete</a>
                    </td>
                </tr>

            @endforeach
        </tbody>

    </table>






    {{-- Modal --}}
    <form method="post" action="{{ route('create.announcement') }}">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input name="title" placeholder="Announcement Title" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Details</label>
                            <textarea name="announcementDetails" placeholder="Announcement Details" type="text" class="form-control"
                                id="exampleInputPassword1" required></textarea>
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
