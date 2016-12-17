@extends('layouts.app')
@section('content')
    <p class="col-sm-offset-6" style="margin-top: 50px">Categories</p>
    <div class="list-group">
        @foreach($categories as $category)
            <div class="list-group-item">
                {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete', 'style' => ''])  }}
                {{ $category->name }}
                {{ link_to_route('categories.show', $title = 'Show', $parameters = [$category->id], $attributes = ['class' => 'btn btn-primary']) }}
                {{ Form::submit('Delete', ['class'=>'btn btn-danger', 'style' => '']) }}
                {{ link_to_route('categories.edit', $title = 'Edit', $parameters = [$category->id], $attributes =
                [
                'style' => 'margin-right: 10px',
                'class' => 'btn btn-primary'
                ]) }}
                {{ Form::close() }}
            </div>
        @endforeach <br>
        {{ link_to_route('categories.create', $title = 'Create', $parameters = [], $attributes = ['class' => 'btn btn-primary']) }}
    </div>






@endsection