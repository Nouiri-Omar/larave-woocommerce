@extends('layouts.dashboard')

@section('content')

<div class="container-fluid mt-5 ml-5">
<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <!-- <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard/products')}}">Products</a></li>
                                    </ol> -->
                                </div>
                            </div> <!-- end row -->
                        </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row ">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Products List </h4>
                        <div class="table-responsive">
                            <table id="prdt" class="table  data-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Regular Price</th>
                                        <th>On Sale</th>
                                        <th>Edit Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_products as $product)
                                        <tr>
                                            <th scope="row">{{$product->id}}</th>
                                        <td>@empty($product->images)
                                            <i class="fas fa-images fa-2x"></i>
                                        @else<img src="{{$product->images[0]->src}}" width="45" height="45"/>

                                            @endempty</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->regular_price}}</td>
                                            <td>@if($product->on_sale) yes @else no @endif</td>
                                            <td>
                                            <div class="row">
                                                <a class="btn btn-primary" href="{{url('/dashboard/products/show/'.$product->id.'')}}">Show Details</a>
                                                <a class="btn btn-primary offset-1" href="{{url('/dashboard/products/update/'.$product->id.'')}}">Update Product</a>

                                                <form class="offset-1" action="{{url('/dashboard/products/delete')}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                    <button class="btn btn-danger" type="submit" name="id" value="{{$product->id}}">Remove Product</button>
                                                </form>



                                            </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <span class="clearfix  mt-3">
                            <a class="btn btn-falcon-primary float-left mt-1 my-1" href="" data-toggle="modal" data-target="#upload"><i class="fas fa-upload fa-3x"></i></a>
                            <a class="btn btn-falcon-success float-right mt-1 my-1" href={{url("/dashboard/products/excel")}}><i class="fas fa-download fa-3x"></i></a>
                        </span>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
</div>
@include('dashboard.products.upload')
@endsection
