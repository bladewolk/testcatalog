@extends('layouts.app')
@section('content')
    <p class="text-center">Create category</p>
    <div class="list-group">
        <li class="list-group-item">
            {{ Form::open(['route' => 'categorieschild.store']) }}
            <p class="text-center">Parent category</p>
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter category name', 'autocomplete' => 'off']) }}
        </li>
        <li class="list-group-item">
            Select childrens categories
        </li>
    </div>
    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
    @include('layouts.errors')
@endsection