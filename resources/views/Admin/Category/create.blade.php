@extends('Admin.Layout.Layout')

@section('title')

@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="d-flex justify-content-between">
            <h1>Add Category</h1>
        </div>

        <div class="card p-3">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline mb-4">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-4">
                    <label class="form-label">Description</label>
                    <input name="description" type="text" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-4">
                    <input name="image" type="file" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
