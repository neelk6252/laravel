@extends('master')
@section('content')
<h3 class="my-3">Add Post</h3>
@if($errors->all())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<li><h5>{{$error}}</h5></li>
@endforeach

</div>
@endif
<form action="{{route('posts.store')}}" method="post">
@csrf
<div class="form-group">
 <input type="text" name="title" placeholder="title" class="form-control">
</div>
<div class="form-group">
<textarea name="content" placeholder="content of the post" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-info"> Submit</button>
</div>
</form>

@endsection