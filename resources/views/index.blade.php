@extends('layouts.layout')
@section('title')
    Natural - Admin Panel
@endsection

@section('head')
    Dashboard
@endsection

@section('content')

    <div class="row ">
        <div class="col-xl-4 col-lg-6">
            <div class="card card-green">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-user"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Users</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{$usersCount}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6">
            <div class="card card-green">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-user-tie"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Admins</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{$adminsCount}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6">
            <div class="card card-green">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-gift"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Products</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{$productsCount}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
