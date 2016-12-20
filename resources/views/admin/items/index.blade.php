@extends('layouts.app')
@section('content')

    <div class="list-group col-md-4 col-md-offset-4">
        <a href="{{ route('items.create') }}" class="btn btn-primary">Create</a>
        <h4 class="text-center">Items</h4>
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">
                    {{  $item->name }} <br>
                    {{ $item->price }}
                    <div class="text-right">
                        {{ link_to_route('items.show', $title = 'Show', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
                        <button class="btn btn-danger DelItem" data-id="{{ $item->id }}">Delete</button>
                        {{ link_to_route('items.edit', $title = 'Edit', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
                        <img src="{{ asset($item->image) }}" widht="50" height="50">
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
@section('scripts')
    <script>
        $(".DelItem").click(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            parent = $(this).parent(".list-group-item");
            id = $(this).data("id");

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
    </script>
@endsection