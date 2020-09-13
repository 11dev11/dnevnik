@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role', 'Role:') !!}
                {!! Form::select('role', ['teacher' => 'teacher','professor'=>'professor','principal'=>'principal','parent'=>'parent'] , null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary ']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
