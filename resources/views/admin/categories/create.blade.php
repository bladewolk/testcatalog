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
            <input type="text" name="SubcategoryName[]" value="" class="form-control"/> <br>
            <input type="text" name="SubcategoryName[]" value="" class="form-control"/>
        </li>

    </div>
    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
    @include('layouts.errors')
@endsection