@extends('layouts.app')
@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">Categories</p>



    <div class="content col-md-2 col-md-offset-5">
        <div class="list-group">
            @foreach($categories as $category)
                <div class="list-group-item">
                    {{ $category->name }}
                </div>
            @endforeach <br>
            <a class="btn btn-primary" href="{{ route('categories.create') }}">New category</a>
        </div>
    </div>

@endsection