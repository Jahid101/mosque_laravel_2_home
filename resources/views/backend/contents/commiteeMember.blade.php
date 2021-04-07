@extends('backend.home')

@section('content')

<div class="container pt-3">
    <div class="row ">
        <div class="col-md-3 ">
            <div class="card bg-success text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Product Quantity</small></h5>
                    <h1>5000</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-warning text-white shadow" style="width: 15rem; height:10rem">
                <div class="card-body">
                    <h5> <small>Total selling Product </small> </h5>
                    <h1>1000</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-primary text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Price Amount</small> </h5>
                    <h1>15000Tk</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card bg-secondary text-white shadow" style="width: 15rem;height:10rem;">
                <div class="card-body">
                    <h5> <small>Total Active Employee</small> </h5>
                    <h1>200</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
