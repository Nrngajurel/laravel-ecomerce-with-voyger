@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--                            @if (Auth::user()->username != $user->username)--}}
                        {{--                        <p class="alert alert-info">it is {{ $user->username }}'s profile!</p>--}}
                        {{--                            @endif--}}
                        <div class="actionbutton">

                            <button class="btn btn-primary"><a class="text-white" href="#newpost">add new post</a></button>
                            <button class="btn btn-primary"><a class="text-white" href="#managepost">manage posts</a></button>

                        </div>
                        <div id="newpost" classs="addnewform">
                            <h1 class="alert">Insert New Post</h1>
                            <form enctype="multipart/form-data" action="{{ request()->path()=='dashboard'?route('post.store'): route('post.update', $post->id ) }}" method="post">
                                @csrf
                                @if(request()->path()!='dashboard')
                                    @method('PUT')
                                @endif

                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                                    <div class="col-md-6">
                                        <input id="title" type="text" value="{{ $post->Title??'' }}" class="form-control @error('title') is-invalid @enderror" name="title"  autofocus>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>
                                    <div class="col-md-6">
                                        <textarea name="Content" id="content" class="form-control" cols="30" rows="10">{{ $post->Content ??'' }}</textarea>
                                        @error('content')

                                        <strong>{{ $message }}</strong>

                                        @enderror
                                    </div>

                                    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control-file btn-primary" name="image" src="D:\photo\20181004_104746.jpg">
                                        @error('image')
                                        <strong>{{ $message }}</strong>

                                        @enderror

                                    </div>
                                    <div class="col d-flex justify-content-end ">

                                        <button class="btn btn-primary">{{ request()->path()!='dashboard'? 'Update': 'Insert'}}</button>


                                    </div>




                                </div>

                            </form>
                        </div>
                        <div id="managepost" class="managepost">
                            <h1>Manage Post</h1>
                            <table class="table-bordered">
                                <tr>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->Title }}</td>
                                        <td>{{ $post->Content  }}</td>

                                        <td><img src="{{ url('storage/'.$post->image_name) }}" alt="" class="w-100 h-25"></td>
                                        <td><a href="{{ route('post.edit',[ 'id'=>$post->id ]) }}" class="btn btn-primary">edit</a></td>
                                        <td><a href="{{ route('post.destroy',[ 'id'=>$post->id ]) }}" class="btn btn-danger" >Delete </a></td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
