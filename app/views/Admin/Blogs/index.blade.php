<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin:Blogs</title>
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

<h1>All the Articles</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>            
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('blogs/' . $value->id) }}">Show this article</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('blogs/' . $value->id . '/edit') }}">Edit this article</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>