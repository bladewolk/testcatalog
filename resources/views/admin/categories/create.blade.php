@extends('layouts.app')
@section('content')


    <div class="content col-md-2 col-md-offset-5">

        <p class="text-center">Create category</p>
        <div class="list-group">
            <li class="list-group-item">
                {{ Form::open(['route' => 'categories.store']) }}
                <p class="text-center">Parent category</p>
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter category name']) }}
            </li>
            <li class="list-group-item">
                Select childrens categories
            </li>
        </div>
        {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}

        @include('layouts.errors')
    </div>






@endsection