@extends('master')
@section('content')
<h3 class="my-3">Update Post</h3>
@if($errors->all())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<li><h5>{{$error}}</h5></li>
@endforeach

</div>
@endif
@if(session()->has('message'))
<div class="alert alert-success">
 {{session()->get('message')}}
</div>
@endif
<form action="{{Route('posts.update',$post->id)}}" method="post">
@csrf
@method('put')
<div class="form-group">
 <input type="text" name="title" placeholder="title" class="form-control" value="{{$post->title}}" >
</div>
<div class="form-group">
<textarea name="content" placeholder="content of the post" cols="30" rows="10" class="form-control" >{{$post->content}}</textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-info"> Update Post</button>
</div>
</form>

@endsection