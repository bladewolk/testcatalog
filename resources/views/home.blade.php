@extends('layouts.app')

@section('content')
    <p class="text-center">Catalog</p>
    <p class="hidden" id="currentCategory" data-name="">NOW</p>


    <div class="col-md-10 col-md-offset-2">
        <div class="panel-group col-md-2" id="accordion">
            @foreach($categories as $key => $value)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-category="{{ $value->id }}" data-parent="#accordion"
                               href="#collapse{{ $key }}" class="loadItems" data-name="{{ $value->name }}">
                                {{ $value->name }}</a>
                        </h4>
                    </div>
                    <div id="collapse{{ $key }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul style="list-style-type:none">
                                @foreach($value->subcategories as $k => $subcategory)
                                    <li>
                                        <input type="checkbox" name="{{ $subcategory->id }}"
                                               data-id="{{ $subcategory->id }}" data-category="{{ $value->id }}">
                                        {{ $subcategory->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="col-md-6 text-center">
            <div class="list-group-item">
                Filter:
                <input type="radio" name="filter" value="none" checked="checked">None
                <input type="radio" name="filter" value="Alphabetical" data-filter="asc" data-column="name">A-Z
                <input type="radio" name="filter" value="Alphabetical" data-filter="desc" data-column="price">Price Up
                to Down
                <input type="radio" name="filter" value="Alphabetical" data-filter="asc" data-column="price">Price Down
                to Up
            </div>

            <div id="loadContent">
                @foreach($items as $item)
                    <div class="col-md-3 text-center">
                        {{ $item->name }} <br>
                        <img src="{{ asset($item->image) }}" width="80%"
                             height="80%">
                        {{ $item->price }}$
                    </div>
                @endforeach
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var category = 0;

        $(function () {

            $('.loadItems').click(function () {

                $('#accordion :checkbox:enabled').prop('checked', false);
                id = $(this).data("category");
                title = $(this).data("name");
                $(document).prop('title', title);
                $('#currentCategory').data("name", id);

                $.ajax({
                    type: 'POST',
                    url: '{{ action('HomeController@loadCategory') }}',
                    data: {
                        id: id,
                        _token: CSRF_TOKEN
                    }
                }).done(function (response) {
                    category = id;
                    $('#loadContent').html(response);
                });
            });

            $(":checkbox").click(function () {
                var array = [];
                id = $(this).attr("name");
                category = $(this).data("category");
                console.log(category);

                $("input:checkbox:checked").each(function () {
                    array.push($(this).data("id"));
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('ajaxLoadSubcategories') }}',
                    data: {
                        id: array,
                        category: category,
                        _token: CSRF_TOKEN
                    }
                }).done(function (response) {
//                console.log(response);
                    $('#loadContent').html(response);
                });
            });

            $("input[name='filter']").click(function () {
                filter = $(this).data("filter");
                column = $(this).data("column");
                category = $('#currentCategory').data("name");
                var array = [];

                $("input:checkbox:checked").each(function () {
                    array.push($(this).data("id"));
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('ajaxFilter') }}',
                    data: {
                        category: category,
                        subcategory: array,
                        column: column,
                        filter: filter,
                        _token: CSRF_TOKEN
                    }
                }).done(function (response) {
                    $('#loadContent').html(response);
                });
            });

        });


    </script>
@endsection

