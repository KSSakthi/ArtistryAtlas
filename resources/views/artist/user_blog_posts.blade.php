<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blogs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
</head>
<style> 
    .blog-post {
        margin-bottom: 40px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column; 
        align-items: center; 
        text-align: center; 
    }
    .blog-post img {
        width: 300px; 
        height: 200px; 
        border-radius: 8px; 
        object-fit: cover; 
        margin-bottom: 20px; 
    }
    .blog-post-content {
        display: flex;
        flex-direction: column;
        align-items: center; 
        justify-content: center; 
    }
    .blog-post h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #007bff; 
    }
    .blog-post p.author {
        font-size: 18px;
        font-family: 'Arial', sans-serif; 
        color: #28a745; 
        margin-bottom: 10px;
    }
    .blog-post p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    .edit-delete {
        margin-top: auto; 
        display: flex; 
        justify-content: space-between; 
        width: 100%; 
    }
    .blog-post .edit-link,
    .delete-button {
        padding: 5px 10px;
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .delete-button {
        background-color: #dc3545; 
        padding-left: 20px;
    }
    .edit-link {
        background-color: #007bff; 
    }
    .edit-link:hover,
    .delete-button:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <div class="image-text">
                <span class="image">
                <img src="{{ asset('Images/Logo.png') }}" alt="Logo" class="logo" style="width:220px;height:70px;">
                </span>

                <div class="text logo-text" style="color: white;padding-left: 53px;">
                    <span class="name">ArtistryAtlas</span><br>
                    <span class="profession"style="color: #E6E6FA;padding-left: 15px;"><b>ARTIST</b></span>
                </div>
            </div>            
        </header>
            <nav class="dashboard-nav-list">
                <a href="/manager/home" class="dashboard-nav-item"><i class="fas fa-home"></i>Home </a>
                
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-paintbrush"></i>Post Artworks </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/artist/post_artworks" class="dashboard-nav-dropdown-item">New Artwork</a>
                        <a href="/user-artworks" class="dashboard-nav-dropdown-item">Edit Artwork</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-pen-to-square"></i>Blog Posts </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/artist/blog_post" class="dashboard-nav-dropdown-item">Create New Blog</a>
                        <a href="/user-blog-posts" class="dashboard-nav-dropdown-item">Edit Blog</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-chalkboard-user"></i> Tutorials </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/artist/post_tutorial" class="dashboard-nav-dropdown-item"> Tutorials </a>
                        <a href="/user-tutorial" class="dashboard-nav-dropdown-item"> Edit Tutorials</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-brands fa-leanpub"></i>Tips & Tricks </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/artist/post_tipstricks" class="dashboard-nav-dropdown-item"> Tips </a>
                        <a href="/tips" class="dashboard-nav-dropdown-item"> Edit Tips</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i> Payments </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/money-request" class="dashboard-nav-dropdown-item">Make Payments</a>
                        <a href="/sent-money-requests" class="dashboard-nav-dropdown-item">Payment History </a>
                    </div>
                </div>
                <a href="{{ route('chatify') }}" target="_blank" class="dashboard-nav-item"><i class="fa-solid fa-comments"></i> Messaging </a>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-regular fa-images"></i> My Top Arts </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/top-user-artworks"class="dashboard-nav-dropdown-item">Most Liked</a>
                    </div>
                </div>
               
                <a href="{{route ('update-profile') }}" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile Updation </a>

                <a href="/announcements/show" class="dashboard-nav-item"><i class="fa-solid fa-bullhorn"></i>Announcements</a>
                <div class="nav-item-divider"></div>

                <a href="#" class="dashboard-nav-item" id="logout-link"><i class="fas fa-sign-out-alt"></i> Logout </a>
                <script>
                    document.getElementById('logout-link').addEventListener('click', function(event) {
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                    });
                </script>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <h2 style="text-align: center;color: #7f1919;font-family: serif;margin-bottom: -22px;padding-top: 20px;"><strong>My Blogs</strong></h2><br><br>
            <div class="gallery" style="padding-left: 50px;">
    @foreach($blogs as $blog)
        <div class="blog-post">
            <h2>{{ $blog->title }}</h2>
            <p class="author">Author: {{ $blog->user->name }}</p>
            <div class="blog-image">
                <img src="{{ asset('storage/' . $blog->image_path) }}" alt="Blog Image">
            </div>
            <div class="blog-post-content">
                <p>{{ $blog->content }}</p>
                <div class="edit-delete">
                    <a href="{{ route('edit.blog_post', $blog) }}" class="edit-link">Edit</a>
                    <form action="{{ route('delete.blog_post', $blog) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
    </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            const mobileScreen = window.matchMedia("(max-width: 990px )");
            $(document).ready(function() {
                $(".dashboard-nav-dropdown-toggle").click(function() {
                    $(this).closest(".dashboard-nav-dropdown")
                        .toggleClass("show")
                        .find(".dashboard-nav-dropdown")
                        .removeClass("show");
                    $(this).parent()
                        .siblings()
                        .removeClass("show");
                });
                $(".menu-toggle").click(function() {
                    if (mobileScreen.matches) {
                        $(".dashboard-nav").toggleClass("mobile-show");
                    } else {
                        $(".dashboard").toggleClass("dashboard-compact");
                    }
                });
            });

            
    function confirmDelete(artworkId) {
        if (confirm('Are you sure you want to delete this artwork?')) {
            document.getElementById('delete-form-' + artworkId).submit();
        }
    }
</script>

</body>
</html>