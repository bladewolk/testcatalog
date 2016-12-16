@extends('layouts.app')

@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">CATA</p>

    <div class="content col-md-2 col-md-offset-5">
        <div class="list-group">
            <div class="list-group-item">
                <a href="{{ route('categories.index') }}">Categories</a>
            </div>
            <div class="list-group-item">
                <a href="{{ route('items.index') }}">Items</a>
            </div>
        </div>
    </div>
@endsection

