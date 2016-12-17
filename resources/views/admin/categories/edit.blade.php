@extends('layouts.app')
@section('content')
    <p class="text-center">Edit {{ $category->name }}</p>
    <div class="list-group">
        <li class="list-group-item">
            {{ Form::model($category, ['method'=>'PUT', 'route' =>['categories.update', $category->id]]) }}
            <p class="text-center">Parent category</p>
            {{ Form::text('name', $category->name , ['class' =>'form-control', 'autocomplete' => 'off']) }}
        </li>
        <li class="list-group-item">
            Select childrens categories
        </li>
    </div>
    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
    @include('layouts.errors')
@endsection