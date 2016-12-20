@extends('layouts.app')

@section('content')


    <div class="list-group col-md-4 col-md-offset-4">
        <div class="list-group-item">
            <a href="{{ route('categories.index') }}">Categories</a>
        </div>
        <div class="list-group-item">
            <a href="{{ route('items.index') }}">Items</a>
        </div>
    </div>
@endsection

