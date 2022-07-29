@extends('layouts.layout')
@section('title')
    {{$product->name}}
@endsection
@section('head')
    {{$product->name}}
@endsection
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="table-responsive table-bordered text-green">
                <table class="table my-0 text-green table-show">
                    <tr>
                        <td class="text-center">
                            <img src="{{URL::asset('images/'.$product->image)}}" class="img-fluid product-image" alt="product image" width="200px" height="200px">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">{{$product->price}} $</td>
                    </tr>
                    <tr>
                        <td>{{$product->details}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

