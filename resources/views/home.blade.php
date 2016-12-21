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
                            @foreach($value->subcategories as $k => $subcategory)
                                <input type="checkbox" name="{{ $subcategory->id }}"
                                       data-id="{{ $subcategory->id }}" data-category="{{ $value->id }}">
                                {{ $subcategory->name }}<br>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="col-md-6 text-center">
            <div class="list-group-item">
                Filter:
                <input type="radio" name="filter" value="none" checked="checked" data-filter="null" data-column="null">None
                <input type="radio" name="filter" value="Alphabetical" data-filter="asc" data-column="name">A-Z
                <input type="radio" name="filter" value="Alphabetical" data-filter="desc" data-column="price">Price Up
                to Down
                <input type="radio" name="filter" value="Alphabetical" data-filter="asc" data-column="price">Price Down
                to Up
            </div>

            <div id="loadContent">
                @for ($i = 0; $i < count($items); $i+=4)
                    @if(isset($items[$i]))
                        <div style="float:left; width:100%">
                            @for ($j = $i; $j < $i+4; $j++)
                                @if (isset($items[$j]))
                                    <div class="col-md-3 text-center">
                                        {{ $items[$j]->name }} <br>
                                        {{--                        <img src="{{ asset('storage/'.$item->image)}}" width="80%"--}}
                                        <img src="{{ $items[$j]->image }}" width="80%"><br>
                                        {{ $items[$j]->price }}$
                                    </div>
                                @endif
                            @endfor
                        </div>
                    @endif
                @endfor
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

                filter = $("input[name='filter']:checked").data("filter");
                column = $("input[name='filter']:checked").data("column");

                $.ajax({
                    type: 'POST',
                    url: '{{ action('HomeController@loadCategory') }}',
                    data: {
                        id: id,
                        filter: filter,
                        column: column,
                        _token: CSRF_TOKEN
                    }
                }).done(function (response) {
                    category = id;
                    $('#loadContent').html(response);
                });
            });
//Load subcategories
            $(":checkbox").click(function () {
                filter = $("input[name='filter']:checked").data("filter");
                column = $("input[name='filter']:checked").data("column");
                var array = [];
                id = $(this).data("id");
                category = $(this).data("category");

                $("input:checkbox:checked").each(function () {
                    array.push($(this).data("id"));
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('ajaxLoadSubcategories') }}',
                    data: {
                        subcategory: array,
                        category: category,
                        column: column,
                        filter: filter,
                        _token: CSRF_TOKEN
                    }
                }).done(function (response) {
//                    console.log(response);
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

