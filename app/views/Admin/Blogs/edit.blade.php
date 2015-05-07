<html>
<head>
    <title>Blog:Editing</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('blogs') }}">My Personal Blog Panel</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('blogs') }}">View All Articles</a></li>
        <li><a href="{{ URL::to('blogs/create') }}">Create an Article</a>
    </ul>
</nav>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($article, array('route' => array('blogs.update', $article->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('content', 'Content') }}
        {{ Form::text('content', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the article!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>