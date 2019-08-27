@extends('master')
@section('content')
<h1>All Post</h1>
@foreach($posts as $post)
<div class="card mt-2">
<div class="bard-body">
<a href="{{Route('posts.show',$post->id)}}">
{{$post->title}}
</a>
</div>
</div>
@endforeach
<div class="my-4">
{{$posts->links()}}
</div>

@endsection