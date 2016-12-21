@extends('layouts.app')
@section('content')
    <div class="list-group col-md-4 col-md-offset-4">
        <p class="text-center">Edit {{ $item->name }}</p>
        <form id="category-form" action="{{ route('items.update', $item->id) }}" method="POST"
              enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put"/>
            {{ csrf_field() }}
            <li class="list-group-item">
                <p class="text-center">Item Name</p>
                <input type="text" name="name" value="{{ $item->name }}" class="form-control">
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
            <li class="list-group-item">
                Update picture:
                {{--<input type="file" name="image"> <br>--}}
                <input type="text" class="form-control" placeholder="Link to image" name="image"
                       value="{{ $item->image }}">
            </li>
        @include('layouts.errors')

    </div>
    <button class="btn btn-primary">Update</button>
    </form>

@endsection