<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('css/fontawesome/all.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">

        <title>@yield('title')</title>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="sidebar col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-green">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                        <div class="text-beige brand text-uppercase d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none">
                            <span class="icon pr-2"><i class="fas fa-seedling"></i></span>
                            <span class="title font-weight-bold ms-1 d-none d-sm-inline">Natural</span>
                        </div>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link align-middle px-0 {{ request()->is('admin') ? 'text-beige' : 'text-as-white' }}">
                                    <span class="icon pr-2"><i class="fas fa-home"></i></span>
                                    <span class="title ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users.index')}}" class="nav-link align-middle px-0 {{ request()->is('admin/users*') ? 'text-beige' : 'text-as-white' }}">
                                    <span class="icon pr-2"><i class="fas fa-users"></i></span>
                                    <span class="title ms-1 d-none d-sm-inline">Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('products.index')}}" class="nav-link align-middle px-0 {{ request()->is('admin/products*') ? 'text-beige' : 'text-as-white' }}">
                                    <span class="icon pr-2"><i class="fas fa-gift"></i></span>
                                    <span class="title ms-1 d-none d-sm-inline">Products</span>
                                </a>
                            </li>
                    </div>
                </div>
                <div class="col py-3 bg-as-white">
                    <h2 class="text-as-black text-center head">@yield('head')</h2>
                    <div class="my-3">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>











        <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('js/popper.min.js')}}"></script>
        <script src="{{URL::asset('js/fontawesome/all.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
    </body>
</html>
