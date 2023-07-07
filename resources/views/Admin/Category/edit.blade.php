@extends('Admin.Layout.Layout')

@section('title')

@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="d-flex justify-content-between">
            <h1>Edit Category</h1>
        </div>

        <div class="card p-3">
            <form action="{{ route('categories.update', ['category' => $cat->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="text" style="display: none;" class="id" value="{{ $cat->id }}" id="">
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="name form-control" value="{{ $cat->name }}">
                </div>
                <div class="input-group input-group-outline mb-4 focused is-focused">
                    <label class="form-label">Description</label>
                    <input name="description" type="text" class="desc form-control" value="{{ $cat->description }}">
                </div>
                <div class="input-group input-group-outline mb-4">
                    <input name="image" type="file" class="image form-control" >
                </div>

                <button type="submit" class="sumbit btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    $(document).ready(function () {
        // $('.sumbit').click(function (e) {
        //     e.preventDefault();

        //     let id = $('.id').val();
        //     let name = $('.name').val();
        //     let description = $('.desc').val();
        //     let image = $('.image')[0].files[0];

        //     var fd = new FormData();
        //     fd.append($(`<input type='text' name='name' value='${name}'>`));
        //     fd.append($(`<input type='text' name='description' value='${description}'>`));
        //     fd.append($(`<input type='file' name='image' value='${image}'>`));
        //     // fd.append('description', description);
        //     // fd.append('image', image);

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         url:`/categories/${id}`,
        //         data: fd,
        //         processData: false,
        //         contentType: false,
        //         type:'PUT',
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


    });
</script>

@endsection
