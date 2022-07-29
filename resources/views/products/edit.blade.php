@extends('layouts.layout')
@section('title')
    Edit Product
@endsection
@section('head')
    Edit Product
@endsection
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="text-center">
        <img src="{{URL::asset('images/'.$product->image)}}" class="img-fluid product-image" alt="product image" width="100px" height="100px">
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{route('products.update', $product->id)}}" class="text-green" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Image input -->
                <div class="form-outline mb-4">
                    <label class="form-label">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose File</label>
                    </div>
                </div>
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$product->name}}"/>
                </div>
                <!-- Price input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{$product->price}}"/>
                </div>

                <!-- Details input -->
                <div class="form-outline mb-4">
                    <label for="details">Details</label>
                    <textarea class="form-control" id="details" rows="3" name="details">{{$product->details}}</textarea>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn bg-green text-as-white btn-block mb-4 my-btn">Edit Product</button>

            </form>
        </div>
    </div>

</div>

@endsection
