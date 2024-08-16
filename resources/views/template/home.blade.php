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
    
<div class="row mt-3">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">title</div>
            <div class="card-body">
                <p>{{$p}}</p>
                <img src="{{asset('uploads'.'/'.$post->image)}}" style="width: 100%; height: 700px;">

            </div>
        </div>
        <div class="mt-1">
            @php
                $likes= DB::table('likes')->where('post_id',$post->post_id)->get(); 
            @endphp
            <form action="{{url('like-count')}}" method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-primary"> {{count($likes)}} </button>
                
            </form>
            <button type="#" class="btn btn-sm btn-secondary"> Comment  </button>
                <button type="#" class="btn btn-sm btn-info"> View  </button>
      
        </div>
    </div>
</div>
@endforeach
@else
no post find
@endif

@endsection