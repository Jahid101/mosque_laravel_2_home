@extends('backend.home')

@section('content')




    {{-- Modal --}}
    <form method="post" action="{{ route('saveUpdate.mahfil', $mahfilList['id']) }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" value="{{$mahfilList['title']}}" placeholder="Mahfil Title" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Details</label>
            <input name="details" value="{{$mahfilList['details']}}" placeholder="Mahfil Details" type="text" class="form-control"
                id="exampleInputPassword1" required>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </form>

@endsection
