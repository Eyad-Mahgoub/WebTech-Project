@extends('Admin.Layout.Layout')

@section('title')
    Add Product
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="d-flex justify-content-between">
            <h1>Edit Product</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card p-3">
            <form action="{{ route('products.update', ['product' => $prod->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ $prod->name }}">
                </div>
                <div class="input-group input-group-static mb-4">
                    <label class="">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option {{ $prod->category->id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Description</label>
                    <input name="description" type="text" class="form-control" value="{{ $prod->description }}">
                </div>
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Price</label>
                    <input name="price" type="number" class="form-control" value="{{ $prod->price }}">
                </div>
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Quantity</label>
                    <input name="quantity" type="number" class="form-control" value="{{ $prod->quantity }}">
                </div>
                <div class="input-group input-group-outline mb-4">
                    <input name="image" type="file" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
