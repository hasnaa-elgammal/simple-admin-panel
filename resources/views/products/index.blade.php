@extends('layouts.layout')

@section('head')
    Products
@endsection
@section('content')
<a href="{{route('products.create')}}" class="btn bg-green my-2 my-btn text-as-white">
    <i class="fas fa-plus"></i>
</a>
@if (!empty($products) && $products->count() > 0)
    <div class="table-responsive text-green">
        <table class="table text-green">
        <thead class="bg-beige">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                <th scope="row">{{$no++}}</th>
                <td><img width="80px" height="80px" src="{{URL::asset('images/'. $product->image)}}" alt="product image"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}} $</td>
                <td>
                    <a href="{{route('products.show',$product->id)}}" class="btn my-btn my-1 bg-green text-as-white">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{route('products.edit',$product->id)}}" class="btn my-btn bg-green my-1 text-as-white">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form class="delete-form" action="{{route('products.destroy', $product->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger my-btn my-1 text-as-white" type="submit">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>

@else
    <div class="alert alert-danger">No Products Found</div>
@endif


@endsection
