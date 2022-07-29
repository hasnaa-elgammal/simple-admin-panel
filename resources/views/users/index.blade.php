@extends('layouts.layout')
@section('title')
    Users
@endsection
@section('head')
    Users
@endsection
@section('content')
<a href="{{route('users.create')}}" class="btn bg-green my-2 my-btn text-as-white">
    <i class="fas fa-plus"></i>
</a>
@if (!empty($users) && $users->count() > 0)
    <div class="table-responsive text-green">
        <table class="table text-green">
        <thead class="bg-beige">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('users.edit',$user->id)}}" class="btn my-btn my-1 bg-green text-as-white">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form class="delete-form" action="{{route('users.destroy', $user->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger text-as-white my-1 my-btn" type="submit">
                            <i class="fas fa-trash "></i>
                        </button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@else
    <div class="alert alert-danger">No Users Found</div>
@endif


@endsection
