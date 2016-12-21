@extends('layouts.app')
@section('content')

    <div class="list-group col-md-4 col-md-offset-4">
        <a href="{{ route('items.create') }}" class="btn btn-primary">Create</a>
        <h4 class="text-center">Items</h4>
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item" data-id="{{ $item->id }}">
                    {{  $item->name }} <br>
                    {{ $item->price }}
                    {{ link_to_route('items.show', $title = 'Show', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
                    <button class=" btn btn-danger DelItem" data-id="{{ $item->id }}">Delete</button>
                    {{ link_to_route('items.edit', $title = 'Edit', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
                    <button class="btn btn-danger DelImg">Del img</button>
                    <img src="{{ asset('storage/'.$item->image)}}" widht="60" height="60">
                </li>
            @endforeach
        </ul>
    </div>

@endsection
@section('scripts')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(".DelItem").click(function () {
            parent = $(this).parent();
            id = parent.data("id");

            $.ajax({
                type: 'POST',
                url: '{{ route('ajaxDeleteItem') }}',
                data: {
                    id: id,
                    _token: CSRF_TOKEN
                }
            }).done(function () {
                parent.remove();
            });
        });

        $(".DelImg").click(function () {
            parent = $(this).parent();
            id = parent.data("id");
            $.ajax({
                type: 'POST',
                url: '{{ route('ajaxImageDelete') }}',
                data: {
                    id: id,
                    _token: CSRF_TOKEN
                }
            }).done(function (response) {
                if (response)
                    parent.html(response);
            });
        });
    </script>
@endsection