@extends('backend.home')

@section('content')


    {{-- Modal --}}
    <form method="post" action="{{route('saveUpdate.event',$eventList['id'])}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Event Name</label>
            <input name="name" value="{{$eventList['name']}}" placeholder="Event Name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Event Details</label>
            <input name="eventDetails" value="{{$eventList['eventDetails']}}" placeholder="Event Details" type="text" class="form-control"
                id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input name="eventDate" value="{{$eventList['eventDate']}}" placeholder="Event Name" type="date" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Time</label>
            <input name="eventTime" value="{{$eventList['eventTime']}}" placeholder="Event Name" type="time" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Budget</label>
            <input name="eventBudget" value="{{$eventList['eventBudget']}}" placeholder="Budget amount" type="number" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Venue</label>
            <input name="venue" value="{{$eventList['venue']}}" placeholder="venue" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" required>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>

@endsection
