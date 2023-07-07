@extends('Admin.Layout.Layout')

@section('title')

@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="d-flex justify-content-between">
            <h1>Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
        </div>

        @if ($products->isEmpty())
        <div class="card p-5 d-flex justify-content-center align-items-center">
            <h2>There are no Products</h2>
        </div>
        @else
        <div class="card p-3">
            <div class="table-responsive p-0">
                <table id="product-table" class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">More</th>
                    </tr>
                    </thead>
                    <tbody class="catData">
                        @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->id }}</td>
                            <td class="text-center">{{ $product->name }}</td>
                            <td class="text-center">{{ $product->category->name }}</td>
                            <td class="text-center">RM {{ $product->price }}</td>
                            <td class="text-center">{{ $product->quantity }}</td>
                            <td class="text-center"><img src="{{ asset('uploads/product/'.$product->image) }}" class="" height="100" width="100"></td>
                            <td class="text-center">
                                <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-primary">Edit Product</a>
                                <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">Delete Product</button>
                                </form>
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

        // $(document).on('click', '.delCat', function (e) {
        //     e.preventDefault();
        //     let id = $(this).closest('.catData').find('.catId').val();

        //     alert(id);
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         url:'/categories/'+ id,
        //         type:'DELETE',
        //         success:  function (response) {
        //             // alert('success');
        //             // console.log(response);
        //             alert('success');
        //             window.location.href = '/categories'
        //         },
        //         error: function(x,xs,xt){
        //             alert(x);

        //         }
        //     });
        // });


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
