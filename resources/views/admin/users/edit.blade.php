@extends('layouts.app')

@section('content')


    <h1>Edit User</h1>

    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}

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
        {!! Form::select('role', ['teacher' => 'teacher','professor'=>'professor','principal'=>'principal','parent'=>'parent'], null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Edit User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy' , $user->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

    <div class="form-group">

        <a href="{{route('users.index')}}"><button type="button" class="btn-primary col-sm-6">Back</button></a>

    </div>
@endSection
