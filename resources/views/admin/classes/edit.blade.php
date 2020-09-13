@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <h1>
            {{$class->class}}
        </h1>
        </div>
        <div class="row justify-content-left">


            {!! Form::model($class, ['method'=>'PATCH', 'action'=>['AdminClassesController@update', $class->id]]) !!}

            @if($subjects)
                @foreach($subjects as $subject)
                    <div class="form-group">
                        {!! Form::label('subjectsName', $subject->name) !!}
                        {{Form::checkbox("subject[]", "$subject->id" , [ "class" => "form-group"])}}

                    </div>
                @endforeach
            @endIf
            <div class="form-group">
                {!! Form::submit('Edit Class', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
        <div class="row justify-content-center">
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminClassesController@destroy' , $class->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Class', ['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}
        </div>
        <div class="row justify-content-center">

            <a href="{{route('classes.index')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>

    </div>
@endsection
