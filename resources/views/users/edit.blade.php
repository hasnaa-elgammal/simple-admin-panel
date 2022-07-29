@extends('layouts.layout')
@section('title')
    Edit User
@endsection
@section('head')
    Edit User
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
            <form method="POST" action="{{route('users.update', $user->id)}}" class="text-green">
                @method('PUT')
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}"/>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}"/>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn bg-green text-as-white btn-block mb-4 my-btn">Edit User</button>

            </form>
        </div>
    </div>

</div>

@endsection
