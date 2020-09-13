@extends('layouts.app')

@section('content')



    @if(Session::has('deleted_subject'))

        <p class="bg-danger">{{session('deleted_subject')}}</p>

    @endif

    @if(Session::has('create_subject'))

        <p class="bg-info">{{session('create_subject')}}</p>

    @endif


    <div class="container">

        <h1>Classes</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Subject</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            @if($subjects)
                @foreach($subjects as $subject)

                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->name}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminSubjectsController@destroy' , $subject->id]]) !!}

                            {!! Form::submit('delete', ['class'=>'button-red']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>

                @endforeach

            @endif


            </tbody>
        </table>

        <div class="row justify-content-center">


            {!! Form::open(['method'=>'POST', 'action'=>'AdminSubjectsController@store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Subject Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Subject', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>

        <div class="form-group">

            <a href="{{route('admin.home')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>


    </div>
@endsection

