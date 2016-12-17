@extends('layouts.app')
@section('content')
    <p class="text-center">Categories Child</p>
    <div class="list-group">
        @foreach($categories as $category)
            <div class="list-group-item">
                {{ Form::open(['route' => ['categorieschild.destroy', $category->id], 'method' => 'delete', 'style' => ''])  }}
                {{ $category->name }}
                {{ Form::submit('Delete', ['class'=>'btn btn-danger', 'style' => '']) }}
                {{ link_to_route('categorieschild.edit', $title = 'Edit', $parameters = [$category->id], $attributes =
                    [
                        'style' => 'margin-right: 10px',
                        'class' => 'btn btn-primary'
                    ]) }}
                {{ Form::close() }}
            </div>
        @endforeach <br>
        {{ link_to_route('categorieschild.create', $title = 'Create', $parameters = [], $attributes = ['class' => 'btn btn-primary']) }}
    </div>
@endsection