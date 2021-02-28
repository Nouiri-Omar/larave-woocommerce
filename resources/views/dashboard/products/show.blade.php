@extends('layouts.dashboard')

@section('content')

<div class="container mt-5 ml-5">
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">

        </div>
    </div>
</div>
    <div class="card image my-2" style="width: 30rem; display:inline-block;">
        <div class="card-body ">
            <h5 class="card-title">image du produit</h5><p class="card-text">
                <img  class="image h-50 w-50" src="{{$product->images[0]->src}}" />
            </p>
        </div>
    </div>
        <div class="card my-1" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Product Id</h5><p class="card-text">
                {{$product->id}}
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Regular Price</h5><p class="card-text">
                {{$product->regular_price}}
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">On Sale</h5><p class="card-text">
                @if($product->on_sale) yes @else no @endif
            </p>
        </div>
        </div>
        <div class="card my-1 " style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Category</h5><p class="card-text">
                @foreach($product->categories as $category)
                    <span> {{$category->name}}</span>
                @endforeach
            </p>
        </div>
        </div>
        <div class="card my-1" style="width: 60rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Product Description</h5><span class="card-text">
                {{strip_tags($product->description)}}
            </span>
        </div>
        </div>
        <div class="card my-1" style="width: 60rem; display:inline-block;">
            <div class="card-title"></div>
        <div class="card-body">
            <h5 class="card-title">Product Short Description</h5>
                {{strip_tags($product->short_description)}}

        </div>
        </div>
</div>


@endsection
