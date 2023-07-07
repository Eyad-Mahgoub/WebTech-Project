@extends('Admin.Layout.Layout')

@section('title')
    Users
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="d-flex justify-content-between">
            <h1>Users</h1>
        </div>

        @if ($users->isEmpty())
        <div class="card p-5 d-flex justify-content-center align-items-center">
            <h2>There are no Users</h2>
        </div>
        @else
        <div class="card p-3">
            <div class="table-responsive p-0">
                <table id="product-table" class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">More</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit User</a>
                                <button id="{{ $user->id }}" class="delCat btn btn-primary">Delete User</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection


@section('script')
<script>
    $(document).ready(function () {

        $('.delCat').click(function (e) {
            e.preventDefault();
            let id = $(this).attr('id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url:'/categories/'+ id,
                type:'delete',
                success:  function (response) {
                    alert('success');
                    window.location.href = '/categories'
                },
                error: function(x,xs,xt){
                    alert(x);

                }
            });
        });


    });
</script>
@endsection
