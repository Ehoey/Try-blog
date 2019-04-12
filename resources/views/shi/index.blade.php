@extends('layouts.app')
@section('content')
    <h1 class="text-center my-5">shi page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card-default">
                <div class="card-header">
                    Shi
                </div>
                <div class="card-body">
                    <ul clsaa="list-group">
                        @foreach($shi as $shi )
                            <li class="list-group-item">

                                {{$shi->name}}

                                <a href="/shi/{{$shi->id}}" class="btn btn-primary btn-sm float-right">view</a>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection