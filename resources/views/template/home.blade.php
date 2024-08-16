@extends('master')
@section('body')
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

@endsection