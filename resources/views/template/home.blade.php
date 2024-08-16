@extends('master')
@section('body')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{url('post')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
        <label> Title </label>
        <input type="text" name="title" class="form-control">
    </div>

        <form method="post" action="#" enctype="multipart/form-data">
            <div class="mb-3">
        <label> Description </label>
        <textarea type="text" name="description" class="form-control" rows="4"> </textarea>
    </div>
    <div class="mb-3">
        <label> Photo </label>
        <textarea type="file" name="image" class="form-control" > </textarea>
    </div>

    <button type="submit" class="btn btn-sm btn-primary">Post </button>
        
        </form> 
    </div>
</div>
@if(count($posts)>0)
@foreach ( $posts as $post )
    
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">title</div>
            <div class="card-body">
                <p>{{$p}}</p>
                <img src="{{asset('uploads'.'/'.$post->image)}}" width="100%" height="100%">

            </div>
        </div>
    </div>
</div>
@endforeach
@else
no post find
@endif

@endsection