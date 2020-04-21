@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
    @if(count($userlist)>0)
        @foreach($userlist as $user)

            <ul class="list-group pb-4 col-md-4">
                <li class="list-group-item">Name: {{$user->name}}</li>
                <li class="list-group-item">Email:{{$user->email}}</li>
                <li class="list-group-item">Username:{{$user->username}}</li>
                <li class="list-group-item"><a href="/delete/{{$user->id}}" class="btn btn-danger">delete</a></li>
            </ul>



        @endforeach

    @endif
    </div>

@endsection

