<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <title>Edit Blogs</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Blog Page</h2>
    <table>
        <thead>
            <tr>
                <!-- <th>Id</th> -->
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <!-- <td>{{ $blog->id }}</td> -->
                        <td><img src="{{ $blog->image_url }}" alt="Blog Image"></td>
                        <td>{{ $blog->blogTitle }}</td>
                        <td>{{ $blog->blogContent }}</td>
                        <td><a href="{{ route('artist.editForm', $blog->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('artist.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>

</body>
</html>
