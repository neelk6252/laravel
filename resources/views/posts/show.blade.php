@extends('master')
@section('content')
<div class="card">
<div class="card-header">
        <h3>
        {{$post->title}}
        </h3>
</div>
    <div class="card-body">
        {{$post->content}}
    </div>
    <div class="card-footer">
    <p class="lead">Last Update:
    {{$post->updated_at}}
    </p>
    </div>
</div>

@endsection