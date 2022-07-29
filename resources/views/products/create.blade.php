@extends('layouts.layout')
@section('title')
    Add Product
@endsection
@section('head')
    Add Product
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
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{route('products.store')}}" class="text-green" enctype="multipart/form-data">
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
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}"/>
                </div>
                <!-- Price input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{old('price')}}"/>
                </div>

                <!-- Details input -->
                <div class="form-outline mb-4">
                    <label for="details">Details</label>
                    <textarea class="form-control" id="details" rows="3" name="details" value="{{old('details')}}"></textarea>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn bg-green text-as-white btn-block mb-4 my-btn">Add Product</button>

            </form>
        </div>
    </div>

</div>

@endsection
