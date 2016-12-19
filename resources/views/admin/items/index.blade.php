@extends('layouts.app')
@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">Items</p>
    <div class="list-group">
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">
                    {{  $item->name }}
                    <span class="text-right">{{ $item->price }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('items.create') }}" class="btn btn-primary">Create</a>

@endsection