@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            {!! Form::open(['method'=>'POST', 'action'=>'AdminClassesController@store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Class Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            @if($subjects)
            @foreach($subjects as $subject)
            <div class="form-group">
                {!! Form::label('subjectsName', $subject->name) !!}
                {{Form::checkbox("subject[]", "$subject->id" , [ "class" => "form-group"])}}

            </div>
            @endforeach
            @endIf

            <div class="form-group">
                {!! Form::submit('Create Class', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
        <div class="form-group">

            <a href="{{route('classes.index')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>
    </div>
@endsection

