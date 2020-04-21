@extends('layouts.app')

@section('content')
    <div id="newpost" classs="addnewform">
        <h1 class="alert">Insert New Post</h1>
        <form action="/insertpost" method="post">

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  required  autofocus>
                </div>
                <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>
                <div class="col-md-6">
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <label for="featureimage" class="col-md-4 col-form-label text-md-right">Image</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file btn-primary">

                </div>
                <div class="col d-flex justify-content-end ">
                    <button class="btn btn-primary">Insert</button>

                </div>




            </div>

        </form>
    </div>





@endsection

