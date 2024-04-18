<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <style>
        .image-row {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            padding-top: 50px;
        }

        .image-row img {
            width: 200px;
            height: 150px;
        }

        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container img {
            width: 163px;
            height: 160px;
        }

        .anchor-container {
            text-align: center;
        }

        a.special-link {
            font-size: 18px;
            font-weight: bold;
            color: blue;
            text-decoration: none;
            font-family: Arial, sans-serif;
            padding: 5px 10px;
            border-radius: 5px;
        }
        
    </style>
</head>

<body>
    <div class='dashboard' style="background-color: white;">
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <div class="image-text">
                    <span class="image">
                        <img src="{{ asset('Images/Logo.png') }}" alt="Logo" class="logo" style="width:220px;height:70px;">
                    </span>

                    <div class="text logo-text" style="color: white;padding-left: 53px;">
                        <span class="name">ArtistryAtlas</span><br>
                        <span class="profession" style="color: #E6E6FA;padding-left: 15px;"><b>ARTIST</b></span>
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
                        <a href="/artist/post_tutorial" class="dashboard-nav-dropdown-item">Tutorials</a>
                        <a href="/user-tutorial" class="dashboard-nav-dropdown-item">Edit Tutorials</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-brands fa-leanpub"></i>Tips & Tricks </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/artist/post_tipstricks" class="dashboard-nav-dropdown-item">Tips</a>
                        <a href="/tips" class="dashboard-nav-dropdown-item">Edit Tips</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i>Payments</a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/money-request" class="dashboard-nav-dropdown-item">Make Payments</a>
                        <a href="/sent-money-requests" class="dashboard-nav-dropdown-item">Payment History </a>
                    </div>
                </div>
                <a href="{{ route('chatify') }}" target="_blank" class="dashboard-nav-item"><i class="fa-solid fa-comments"></i>Messaging </a>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-regular fa-images"></i>My Top Arts </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/top-user-artworks" class="dashboard-nav-dropdown-item">Most Liked</a>
                    </div>
                </div>

                <a href="{{route ('update-profile') }}" class="dashboard-nav-item"><i class="fas fa-user"></i>Profile Updation</a>

                <a href="/announcements/show" class="dashboard-nav-item"><i class="fa-solid fa-bullhorn"></i>Announcements</a>
                <div class="nav-item-divider"></div>

                <a href="#" class="dashboard-nav-item" id="logout-link"><i class="fas fa-sign-out-alt"></i>Logout </a>

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
            <div class="image-row">
                <div class="image-container">
                    <img src="{{ asset('images/1.png') }}" alt="Image 1">
                    <div class="anchor-container">
                        <a href="{{route ('update-profile') }}" class="special-link">My Profile</a>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/2.png') }}" alt="Image 2">
                    <div class="anchor-container">
                        <a href="/user-artworks" class="special-link">My Arts</a>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/blog.png') }}" alt="Image 3">
                    <div class="anchor-container">
                        <a href="/user-blog-posts" class="special-link">My Blogs</a>
                    </div>
                </div>
            </div>

            <div class="image-row">
                <div class="image-container">
                    <img src="{{ asset('images/tips-and-tricks.png') }}" alt="Image 4">
                    <div class="anchor-container">
                        <a href="/tips" class="special-link">My Tips</a>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/video-tutorials.png') }}" alt="Image 3">
                    <div class="anchor-container">
                        <a href="/user-tutorial" class="special-link">My Tutorials</a>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{ asset('images/paint.png') }}" alt="Image 3">
                    <div class="anchor-container">
                        <a href="/top-user-artworks" class="special-link">My Top Arts</a>
                    </div>
                </div>
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
        </script>
</body>
</html>