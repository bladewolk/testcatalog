@extends('layouts.app')
@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">Categories</p>



    <div class="content col-md-2 col-md-offset-5">
        <div class="list-group">
            @foreach($categories as $category)
                <div class="list-group-item">
                    {{ $category->name }}
                    {{ link_to_route('categories.destroy', $title = 'Delete', $parameters = [$category->id], $attributes = ['style' => 'float:right']) }}
                    {{ link_to_route('categories.edit', $title = 'Edit', $parameters = [$category->id], $attributes = ['style' => 'float:right; margin-right: 5px']) }}
                    <br>
                </div>
            @endforeach <br>
            {{ link_to_route('categories.create', $title = 'Create', $parameters = [], $attributes = ['class' => 'btn btn-primary']) }}
        </div>
    </div>



@endsection