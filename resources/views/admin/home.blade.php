@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route('users.index')}}">Users</a>
                            <br>
                       <a href="{{route('classes.index')}}">Class</a>
                            <br>
                            <a href="{{route('subjects.index')}}">Subjects</a>
                            <br>
                            <a href="{{route('students.index')}}">Students</a>
{{--                        <br>--}}
{{--                        <a href="{{route('parent.create')}}">Create Parent</a> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
