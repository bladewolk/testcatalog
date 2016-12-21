@extends('layouts.app')
@section('content')
    <div class="list-group col-md-4 col-md-offset-4">
        Categories
        @foreach($categories as $category)
            <div class="list-group-item">
                <div class="text-left">
                    {{ $category->name }}
                </div>
                <div class="text-right">
                    {{ link_to_route('categories.show', $title = 'Show', $parameters = [$category->id], $attributes = ['class' => 'btn btn-primary']) }}
                    <button class="btn btn-danger DelCat" data-id="{{ $category->id }}">
                        Delete
                    </button>
                    {{ link_to_route('categories.edit', $title = 'Edit', $parameters = [$category->id], $attributes = ['class' => 'btn btn-primary']) }}
                </div>
            </div>
        @endforeach <br>
        {{ link_to_route('categories.create', $title = 'Create', $parameters = [], $attributes = ['class' => 'btn btn-primary']) }}
    </div>
@endsection
@section('scripts')
    <script>
        $(".DelCat").click(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            parent = $(this).parent().parent();
            id = $(this).data("id");

            $.ajax({
                type: 'POST',
                url: '{{ route('ajaxCategoryDelete') }}',
                data: {
                    id: id,
                    _token: CSRF_TOKEN
                }
            }).done(function () {
                parent.remove();
            });

        });
    </script>
@endsection