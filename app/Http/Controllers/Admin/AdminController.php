<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all()->count();
        $products = Product::all()->count();
        $users = User::all()->count();

        return view('Admin.index', compact('categories', 'products', 'users'));
    }
}
