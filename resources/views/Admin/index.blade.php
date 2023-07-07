@extends('Admin.Layout.Layout')

@section('title')

@endsection

@section('content')
<div class="row p-1">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                Total Categories
                <h5>{{ $categories }}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="{{ route('categories.index') }}">View Categories</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">
                Total Products
                <h5>{{ $products }}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="{{ route('products.index') }}">View Products</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                Total Users
                <h5>{{ $users }}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link text-decoration-none" href="{{ route('users.index') }}">View Users</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>


</div>
@endsection
