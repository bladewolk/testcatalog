@extends('layouts.app')
@section('content')
    <div class="list-group col-md-4 col-md-offset-4">
        <p class="text-center">Edit {{ $item->name }}</p>
        <li class="list-group-item">
            {{ Form::model($item, ['method'=>'PATCH', 'route' =>['items.update', $item->id]]) }}
            <p class="text-center">Item Name</p>
            {{ Form::text('name', $item->name , ['class' =>'form-control', 'autocomplete' => 'off']) }}
        </li>
        <li class="list-group-item">
            <p class="text-center">Price</p>
            <input type="text" name="price" class="form-control" value="{{ $item->price }}">
        </li>
        <li class="list-group-item">
            Category: {{ $item->category->name }}
        </li>
        <li class="list-group-item">
            Subcategory: {{ $item->subcategory->name }}
        </li>
        @include('layouts.errors')
    </div>
    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection