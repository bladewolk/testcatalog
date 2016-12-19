@extends('layouts.app')
@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">Items</p>
    <div class="list-group">
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">
                    {{  $item->name }}
                    <span class="text-right">{{ $item->price }}</span>
                    <button class="btn btn-danger DelItem" data-id="{{ $item->id }}">Delete</button>
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