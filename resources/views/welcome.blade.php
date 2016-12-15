@extends('layouts.app')

@section('content')

    <p class="col-sm-offset-6" style="margin-top: 50px">CATA</p>

    <div class="content col-md-9 col-md-offset-3">
        <div class="col-md-2">
            CATEGORIES
            <div class="panel-group" id="collapse-group">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">Fruits</a>
                        </h4>
                    </div>
                    <div id="el1" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">Apple<input type="checkbox" class="pull-right"></li>
                            <li class="list-group-item">Cherry<input type="checkbox" class="pull-right"></li>
                            <li class="list-group-item">Citrus<input type="checkbox" class="pull-right"></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="panel-group" id="collapse-group2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#collapse-group2" href="#el2">Vegetables</a>
                        </h4>
                    </div>
                    <div id="el2" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">Apple<input type="checkbox" class="pull-right"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 bordered">
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
    </div>
@endsection

