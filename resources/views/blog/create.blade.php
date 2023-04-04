<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
        .container {
            width: 500px
        }
    </style>
    <br> <br>
    <div class="container">
        <h2>Blog form</h2>
        <form action="{{route('blog.store')}}"method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="blog title" name="title">
            </div>

            <br><br>
            <div class="form-group">
                <label for="description">Description</label>
                <div>
                    <textarea name="description" id="description"></textarea>
                </div>

                <br><br>
                <div class="form-group">
                    <label for="image">image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <br><br>
                <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</body>

</html>
