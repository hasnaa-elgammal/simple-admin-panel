<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $usersCount = User::where('role', 1)->count();
        $adminsCount = User::where('role', 0)->count();
        $productsCount = Product::count();
        return view('index', compact('usersCount', 'adminsCount', 'productsCount'));
    }
}
