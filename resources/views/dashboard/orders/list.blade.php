@extends('layouts.dashboard')

@section('content')

                            <div class="container-fluid mt-5 ml-5">
                            <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Orders List</h4>
                                </p>

                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Order Number</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list_orders as $order)
                                                <tr>
                                                    <th scope="row">{{$order->id}}</th>
                                                    <td>{{$order->number}}</td>
                                                    <td>{{$order->status}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <span class="col-sm-auto d-flex justify-content-end  mt-3">
                            <a class="btn btn-falcon-success" href={{url("/dashboard/orders/excel")}}><i class="fas fa-download fa-3x"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

@endsection
