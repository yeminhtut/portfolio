<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{$article->title}}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('blogs') }}">Blog</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('blogs') }}">View All Articles</a></li>
        <li><a href="{{ URL::to('blogs/create') }}">Create an article</a>
    </ul>
</nav>

<h1>Showing {{ $article->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $article->title }}</h2>
        <p>
            {{$article->content}}
        </p>
    </div>

</div>
</body>
</html>