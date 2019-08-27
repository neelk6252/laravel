<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="bg-info mb-5 text-white p-5">
<a href="{{Route('posts.create')}}" class="btn btn-secondry">Create Post</a>
<a href="{{Route('posts.index')}}" class="btn btn-secondry">All Post</a>
</div>
<div class="container">
@yield("content")
</div>
    <div class="footer text-center p-3 bg-dark text-white">
    All rights Reserved {{date('Y')}}
    </div>
</body>
</html>