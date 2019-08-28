@extends('master')
@section('content')
<h1>All Post</h1>
@if(session()->has('message1'))
<div class="alert alert-danger">
{{session()->get('message1')}}
</div>
@endif
@foreach($posts as $post)
<div class="card mt-2">
<div class="bard-body">
<a href="{{Route('posts.show',$post->id)}}">
{{$post->title}}
</a>
<a href="{{Route('posts.edit',$post->id)}}" class="btn btn-info btn-sm">Edit</a>
<form  class="d-inline-block" action="{{Route('posts.destroy',$post->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
</div>
</div>
@endforeach
<div class="my-4">
{{$posts->links()}}
</div>

@endsection