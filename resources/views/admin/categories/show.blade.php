@extends('layouts.app')
@section('content')
    <p class="col-sm-offset-6" style="margin-top: 50px">Categories</p>
    <div class="list-group">
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