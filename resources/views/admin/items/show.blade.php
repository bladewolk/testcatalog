@extends('layouts.app')
@section('content')
    <div class="list-group col-md-4 col-md-offset-4">
        <ul class="list-group">
            <h4 class="text-center">Item</h4>
            <li class="list-group-item">
                Name: {{ $item->name }}
            </li>
            <h4 class="text-center">Category</h4>
            <li class="list-group-item">
                {{ $item->category->name }}
            </li>
            <h4 class="text-center">Subcategory</h4>
            <li class="list-group-item">
                {{ $item->subcategory->name }}
            </li>
        </ul>

    </div>
@endsection