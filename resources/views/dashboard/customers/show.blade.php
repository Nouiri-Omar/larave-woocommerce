@extends('layouts.dashboard')

@section('content')

        <div class="container mt-5 ml-5">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
        <div class="card my-1" style="width: 60rem;">
        <div class="card-body">
            <h5 class="card-title">Customer Id</h5><p class="card-text">
            {{$customer->id}}
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 60rem;">
        <div class="card-body">
            <h5 class="card-title">First Name</h5><p class="card-text">
            {{$customer->first_name}}
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 60rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Last Name</h5><p class="card-text">
            {{$customer->last_name}}
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 60rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Username</h5><p class="card-text">
            {{$customer->username}}
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 60rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Email</h5><p class="card-text">
            {{$customer->email}}
            </p>
        </div>
        </div>
        </div>
        </div>

@endsection
