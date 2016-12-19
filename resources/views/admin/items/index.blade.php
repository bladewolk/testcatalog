@extends('layouts.app')
@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">Items</p>
    <div class="list-group">
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">
                    {{  $item->name }}
                    <span class="text-right">{{ $item->price }}</span>
                    {{ link_to_route('items.show', $title = 'Show', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
                    <button class="btn btn-danger DelItem" data-id="{{ $item->id }}">Delete</button>
                    {{ link_to_route('items.edit', $title = 'Edit', $parameters = [$item->id], $attributes = ['class' => 'btn btn-primary']) }}
                    <img src="{{ asset('/images/1482174815.jpg') }}" widht="50" height="50">
                </li>
            @endforeach
        </ul>
    </div>

    <a href="{{ route('items.create') }}" class="btn btn-primary">Create</a>
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