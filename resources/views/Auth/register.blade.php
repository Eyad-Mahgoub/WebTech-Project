@extends('Auth.layout.Layout')

@section('title')
    Register
@endsection


@section('content')
<div class="login-page-layout">
    <div class="mid">
        <div class="mb-5">
            <h1>Register</h1>
        </div>
        <form action="{{ route('register.register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-5">
                <label class="form-label">Pasword</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button class="btn btn-primary w-100" type="submit">Register</button>
        </form>
    </div>
</div>
@endsection
