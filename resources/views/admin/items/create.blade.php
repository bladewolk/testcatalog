@extends('layouts.app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <h4 class="text-center">Create Item</h4>
        <form id="category-form" action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <ul class="list-group">
                <li class="list-group-item">
                    <input type="text" name="name" class="form-control" placeholder="Enter item name"
                           autocomplete="off">
                </li>
                <li class="list-group-item">
                    <input type="text" name="price" class="form-control" placeholder="Enter item price"
                           autocomplete="off">
                </li>
                <li class="list-group-item">
                    <input type="file" name="image">
                </li>
            </ul>
            <h4 class="text-center">Select category and subcategory</h4>
            <ul class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item category" data-category="{{ $category->id }}">
                        {{ $category->name }}
                    </li>
                @endforeach
            </ul>
            <ul class="list-group" id="subcategories">

            </ul>
            <input type="submit" value="Create" class="btn btn-success">
        </form>
    </div>
    @include('layouts.errors')
@endsection
@section('scripts')
    <script>
        $('.category').hover().css('cursor', 'pointer');

        $('.category').click(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            id = $(this).data("category");

            $.ajax({
                type: 'POST',
                url: '{{ route('subcategoryLoad') }}',
                data: {
                    id: id,
                    _token: CSRF_TOKEN
                }
            }).done(function (response) {
                $("#subcategories").html(response);
            });
        });
    </script>
@endsection