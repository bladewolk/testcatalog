@extends('layouts.app')
@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">Items</p>

    <div class="content col-md-2 col-md-offset-5">
        <div class="list-group">
            <div class="list-group-item">
                Item1
            </div>
            <div class="list-group-item">
                Item2
            </div>
            <br>
            <button class="btn btn-primary">New item</button>
        </div>
    </div>

@endsection