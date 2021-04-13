@extends('backend.home')

@section('content')



    {{-- Modal --}}
    <form method="post" action="{{ route('saveUpdate.announcement', $announcementList['id']) }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" value="{{$announcementList['title']}}" placeholder="Announcement Title" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Details</label>
            <input name="announcementDetails" value="{{$announcementList['announcementDetails']}}" placeholder="Announcement Details" type="text" class="form-control"
                id="exampleInputPassword1" required>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection
