@extends('layouts.app')
@section('content')
    <p class="text-center">Create category</p>
    <div class="list-group">
        <li class="list-group-item">
            {{ Form::open(['route' => 'categories.store']) }}
            Category
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter category name']) }}
        </li>
        <li class="list-group-item">
            Subcategories <br>

            <div class="input_fields_wrap">
                <button class="add_field_button">Add More Fields</button>
                <div><input type="text" name="mytext[]"></div>
            </div>

        </li>
    </div>

    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}

    @include('layouts.errors')
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/inputs.js') }}"></script>
    <script>
        $("form").on("submit", function (event) {
            event.preventDefault();
            console.log($(this).serialize());
        });
    </script>
@endsection
