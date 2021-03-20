<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LAB1</title>
    </head>
    <body>
            <nav class="navbar navbar-dark bg-dark">
                <span class="navbar-brand mb-0 h1">All Posts</span>
            </nav>
            <div class="container">
            <button type="button" class="btn btn-success" style="margin-bottom: 20px;">
                Create Post
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post['id']}}</th>
                        <td>{{$post['title']}}</td>
                        <td>{{$post['posted_by']}}</td>
                        <td>{{$post['created_at']}}</td>
                        <td>
                            <button type="button" class="btn btn-info" style="margin-bottom: 20px;">View</button>
                            <button type="button" class="btn btn-secondary" style="margin-bottom: 20px;">Edit</button>
                            <button type="button" class="btn btn-danger" style="margin-bottom: 20px;">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
