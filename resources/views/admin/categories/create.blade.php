@extends('layouts.app')
@section('content')


    <div class="content col-md-2 col-md-offset-5">

        <p class="text-center">Create category</p>
        <div class="list-group">

            <li class="list-group-item">
                {{ Form::open(['route' => 'categories.store']) }}
                {{ Form::label('LO') }}
                <p class="text-center">Parent category</p>
                Name<input type="text" class="form-control">
            </li>
            <li class="list-group-item">
                Select childrens categories
            </li>

        </div>
        <br><a class="btn btn-success" href="#">Save</a>
    </div>


    {{--{{ Form::text('minTime','', ['class' =>'form-control', 'autocomplete' => 'off']) }}--}}
    {{--{{ Form::label('Price for 1 minute') }}--}}
    {{--{{ Form::text('value','', ['class' =>'form-control', 'autocomplete' => 'off']) }}--}}
    {{--{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}--}}
    {{--{{ Form::close() }} <br>--}}


@endsection