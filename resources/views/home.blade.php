@extends('layouts.app')

@section('content')
    <p class="text-center">Catalog</p>


    <div class="col-md-12 col-md-offset-2">
        <div class="panel-group col-md-2" id="accordion">
            @foreach($categories as $key => $value)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $key }}">
                                {{ $value->name }}</a>
                        </h4>
                    </div>
                    <div id="collapse{{ $key }}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul style="list-style-type:none">
                                @foreach($value->subcategories as $k => $subcategory)
                                    <li>
                                        <input type="checkbox" name="{{ $subcategory->id }}">
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
            <ul class="list-group">
                <li class="list-group-item">
                    BLOCK3
                </li>
            </ul>

            <div id="loadContent">
                @foreach($items as $item)
                    <div class="col-md-3 text-center">
                        {{ $item->name }}
                        <img src="{{ asset($item->image) }}" width="80%"
                             height="80%">
                        {{ $item->price }}$
                    </div>
                @endforeach
            </div>


        </div>

    </div>
@endsection

