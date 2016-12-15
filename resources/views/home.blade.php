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
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">СPU</a>
                        </h4>
                    </div>
                    <div id="el1" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">Intel<input type="checkbox" class="pull-right"></li>
                            <li class="list-group-item">AMD<input type="checkbox" class="pull-right"></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="panel-group" id="collapse-group2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#collapse-group2" href="#el2">Videocards</a>
                        </h4>
                    </div>
                    <div id="el2" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">Nvidia<input type="checkbox" class="pull-right"></li>
                            <li class="list-group-item">AMD<input type="checkbox" class="pull-right"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel-group" id="collapse-group2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#collapse-group3" href="#el3">Memory</a>
                        </h4>
                    </div>
                    <div id="el3" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item">1300Mhz<input type="checkbox" class="pull-right"></li>
                            <li class="list-group-item">1600Mhz<input type="checkbox" class="pull-right"></li>
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

