@extends('layouts.app')

@section('content')
    <p class="text-center">Catalog</p>


    <div class="col-md-6">
        CATEGORIES
        <div class="panel-group" id="accordion">
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
                            <ul>
                                @foreach($value->subcategories as $k => $subcategory)
                                    <li class="">
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

        <div class="col-md-6">
            <div class="">
                BLOCK3
            </div>
            <div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
            </div>
            <div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>
                </div>
            </div>
            <div>
                <div class="col-sm-3 mgtp">
                    <img src="https://pbs.twimg.com/profile_images/473506797462896640/_M0JJ0v8.png" width="80%"
                         height="80%">
                    Place PRICE <br>
                    <button>BY IT!</button>


                </div>
            </div>
        </div>
@endsection

