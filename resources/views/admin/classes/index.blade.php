@extends('layouts.app')

@section('content')



    @if(Session::has('deleted_class'))

        <p class="bg-danger">{{session('deleted_class')}}</p>

    @endif

    @if(Session::has('edit_class'))

        <p class="bg-info">{{session('edit_class')}}</p>

    @endif
    @if(Session::has('create_class'))

        <p class="bg-info">{{session('create_class')}}</p>

    @endif


    <div class="container">

        <h1>Classes</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Subjects</th>
            </tr>
            </thead>
            <tbody>

            @if($classes)

                @foreach($classes as $class)

                    <tr>
                        <td>{{$class->id}}</td>
                        <td><a href="{{route('classes.edit', $class->id)}}">{{$class->class}}</a></td>
                        <td>{{$class->subjects_ids}}</td>
{{--                        <td>{{$class->created_at->diffForHumans()}}</td>--}}
{{--                        <td>{{$class->updated_at->diffForHumans()}}</td>--}}
                    </tr>

                @endforeach

            @endif

            <div class="form-group">

                <a href="{{route('classes.create')}}"><button type="button" class="btn-primary col-sm-6">Create Class</button></a>

            </div>

            </tbody>
        </table>

        <div class="form-group">

            <a href="{{route('admin.home')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>


    </div>
@endsection
