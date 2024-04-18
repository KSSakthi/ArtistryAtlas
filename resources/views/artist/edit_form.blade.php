<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 70px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-right: 350px;
        }

        h2 {
            color: #333;
        }

        .blog-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 8px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Blog Post</h2>
    <form action="{{ route('artist.update', $blog->id) }}" method="POST" enctype="multipart/form-data" id="editBlogForm">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="artworkImage"> Blog Image:</label>
            <input type="file" id="artworkImage" name="artworkImages[]" accept="image/*" multiple required>
            <div class="preview" id="imagePreview"></div>
        </div>
        <div class="form-group">
            <label for="blogTitle">Blog Title:</label>
            <input type="text" id="blogTitle" name="blogTitle" value="{{ $blog->blogTitle }}" required>
        </div>

        <div class="form-group">
            <label for="blogContent">Blog Content:</label>
            <textarea id="blogContent" name="blogContent" rows="17" required>{{ $blog->blogContent }}</textarea>
        </div>

        <button type="button" id="updateButton">Update</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        console.log('Document ready!');
        $("#updateButton").click(function () {
            console.log('Update button clicked!');
            updateBlogPost();
        });

        function updateBlogPost() {
            console.log('Updating blog post...');
            const formData = new FormData($('#editBlogForm')[0]);

            $.ajax({
                url: "{{ route('artist.update', $blog->id) }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log('Blog post updated successfully!', response);
                },
                error: function(error) {
                    console.error('Error updating blog post:', error);
                }
            });
        }
    });
</script>

</body>
</html>
