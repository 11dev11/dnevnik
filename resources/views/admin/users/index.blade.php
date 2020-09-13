@extends('layouts.app')

@section('content')
{{--    @if(Session::has('create_user'))--}}

{{--        <p class="bg-info">{{session('create_user')}}</p>--}}

{{--    @endif--}}


    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

    @if(Session::has('edit_user'))

        <p class="bg-info">{{session('edit_user')}}</p>

    @endif


    <div class="container">

{{--        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@getAllUsers']) !!}--}}

        <h1>Users</h1>

        <div class="form-group">

            <a href="{{route('users.create')}}"><button type="button" class="btn-primary col-sm-6">Create User</button></a>

        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>

            @if($users)

                @foreach($users as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>

{{--        {!! Form::close() !!}--}}
        <div class="form-group">

            <a href="{{route('admin.home')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>

    </div>
@endsection
