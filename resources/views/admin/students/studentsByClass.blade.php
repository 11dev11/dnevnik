@extends('layouts.app')

@section('content')
        @if(Session::has('create_student'))

                <p class="bg-info">{{session('create_student')}}</p>

        @endif


        @if(Session::has('deleted_student'))

            <p class="bg-danger">{{session('deleted_student')}}</p>

        @endif

        @if(Session::has('edit_student'))

            <p class="bg-info">{{session('edit_student')}}</p>

        @endif


    <div class="container">


        <h1>Students</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Student</th>
{{--                <th></th>--}}
            </tr>
            </thead>
            <tbody>

            @if($students)
                @foreach($students as $student)

                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
{{--                        <td>--}}
{{--                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminStudentsController@destroy' , $student['id']]]) !!}--}}

{{--                            {!! Form::submit('delete', ['class'=>'button-red']) !!}--}}
{{--                            {!! Form::close() !!}--}}
{{--                        </td>--}}
                    </tr>

                @endforeach

            @endif


            </tbody>
        </table>



        <div class="form-group">

            <a href="{{route('admin.home')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>

    </div>
@endsection
