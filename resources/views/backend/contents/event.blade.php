@extends('backend.home')

@section('content')


<!-- Button trigger modal -->
<a style="margin-left: 90%" href="#">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add Event
    </button>
</a>



<table class="table table-light table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Event Name</th>
            <th style="width: 30%" scope="col">Event Details</th>
            <th scope="col">Event Date</th>
            <th scope="col">Event Time</th>
            <th scope="col">Event Budget</th>
            <th scope="col">Event Venue</th>
            <th style="width: 23%" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eventList as $key=> $data)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->eventDetails}}</td>
                <td>{{$data->eventDate}}</td>
                <td>{{$data->eventTime}}</td>
                <td>{{$data->eventBudget}}</td>
                <td>{{$data->venue}}</td>
                <td>
                    <a class="btn btn-secondary"href="">View</a>
                    <a class="btn btn-success"href="">Update</a>
                    <a class="btn btn-danger"href="">Delete</a>
                </td>
            </tr>

        @endforeach
    </tbody>

</table>






    {{-- Modal --}}
    <form method="post" action="{{route('create.event')}}">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Event Name</label>
                            <input name="name" placeholder="Event Name" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Event Details</label>
                            <textarea name="eventDetails" placeholder="Event Details" type="text" class="form-control"
                                id="exampleInputPassword1" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date</label>
                            <input name="eventDate" placeholder="Event Name" type="date" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Time</label>
                            <input name="eventTime" placeholder="Event Name" type="time" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Budget</label>
                            <input name="eventBudget" placeholder="Budget amount" type="number" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Venue</label>
                            <input name="venue" placeholder="venue" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
