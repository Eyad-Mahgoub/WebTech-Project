@extends('Admin.Layout.Layout')

@section('title')
    Edit User
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="d-flex justify-content-between">
            <h1>Edit User</h1>
        </div>

        <div class="card p-3">
            <form action="{{ route('users.update', ['user' => $usr->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="name form-control" value="{{ $usr->name }}">
                </div>
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Email</label>
                    <input name="email" type="text" class="desc form-control" value="{{ $usr->email }}">
                </div>

                <button type="submit" class="sumbit btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
