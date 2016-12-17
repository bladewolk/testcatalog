@extends('layouts.app')

@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">CATA</p>

    <div class="list-group">
        <div class="list-group-item">
            <a href="{{ route('categories.index') }}">Categories</a>
        </div>
        <div class="list-group-item">
            <a href="{{ route('categorieschild.index') }}">Categories Child</a>
        </div>

        <div class="list-group-item">
            <a href="{{ route('items.index') }}">Items</a>
        </div>
    </div>
@endsection

