@extends('layouts.app')

@section('content')
{{--    --}}{{--    @if(Session::has('create_user'))--}}

{{--    --}}{{--        <p class="bg-info">{{session('create_user')}}</p>--}}

{{--    --}}{{--    @endif--}}


{{--    @if(Session::has('deleted_user'))--}}

{{--        <p class="bg-danger">{{session('deleted_user')}}</p>--}}

{{--    @endif--}}

{{--    @if(Session::has('edit_user'))--}}

{{--        <p class="bg-info">{{session('edit_user')}}</p>--}}

{{--    @endif--}}


    <div class="container">


        <h1>Classes</h1>



            @if($classes)
            <ul>
                @foreach($classes as $class)


                        <li><a href="{{route('students.show', $class->id)}}">{{$class->class}}</a></li>


                @endforeach
            </ul>
            @endif



        <div class="form-group">

            <a href="{{route('admin.home')}}"><button type="button" class="btn-primary">Back</button></a>

        </div>

    </div>
@endsection
