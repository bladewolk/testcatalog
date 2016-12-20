@extends('layouts.app')
@section('content')
    <div class="list-group col-md-4 col-md-offset-4">
        Category
        <div class="list-group-item">
            {{ $category->name }}
        </div>
        Subcategories
        @foreach($category->subcategories as $value)
            <div class="list-group-item">
                {{$value->name}}
            </div>
        @endforeach
    </div>
@endsection