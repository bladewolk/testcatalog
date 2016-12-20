@extends('layouts.app')
@section('content')
    <div class="list-group col-md-4 col-md-offset-4">
        <p class="text-center">Edit {{ $category->name }}</p>
        <li class="list-group-item">
            {{ Form::model($category, ['method'=>'PUT', 'route' =>['categories.update', $category->id]]) }}
            <p class="text-center">Parent category</p>
            {{ Form::text('name', $category->name , ['class' =>'form-control', 'autocomplete' => 'off']) }}
        </li>
    </div>
    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
    @include('layouts.errors')
@endsection