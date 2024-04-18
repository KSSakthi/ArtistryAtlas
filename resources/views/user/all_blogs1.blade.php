

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - All Blogs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-wsY7J8Fuvp9RCX3D0ntIHtF6bRo3S49Md1pR58gH2Egn2EA5/9S+id7fGmpRSe5gH8coAzl1SBxgk6t+n/DHQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

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
        .top-row {
            display: flex;
            justify-content: space-around;
            background-color: #114B5F;
            color: #fff;
            padding: 10px;
            align-items: center; 
        }
        .top-row a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
        }
        .top-row a:hover {
            border-bottom: 2px solid #fff;
        }
</style>
</head>

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
                        <span class="profession" style="color: #E6E6FA;padding-left: 15px;"><b>USER</b></span>
                    </div>
                </div>
            </header>

            <nav class="dashboard-nav-list">
                <a href="/user/arts" class="dashboard-nav-item"><i class="fas fa-home"></i>Home </a>
                <a href="/user/all-artworks" class="dashboard-nav-item"><i class="fa-solid fa-paintbrush"></i>All Posts </a>
                <a href="/blogs/all" class="dashboard-nav-item"><i class="fa-solid fa-pen-to-square"></i>All Blogs </a>
                <a href="/all-tutorial" class="dashboard-nav-item"><i class="fa-solid fa-chalkboard-user"></i>All Tutorials </a>
                <a href="/guest/tips" class="dashboard-nav-item"><i class="fa-brands fa-leanpub"></i>All Tips </a>
                <a href="/recent-artworks" class="dashboard-nav-item"><i class="fa-solid fa-palette"></i>Recent Artworks </a>
                <!-- <a href="#" class="dashboard-nav-item"><i class="fa-solid fa-magnifying-glass"></i>Search Artist profile</a> -->

                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-bookmark"></i>My Contributions </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/user/liked-artworks" class="dashboard-nav-dropdown-item">My Liked Artworks</a>
                        <a href="/user/comments" class="dashboard-nav-dropdown-item">My Comments</a>
                        <!-- <a href="#" class="dashboard-nav-dropdown-item">My Feedbacks</a> -->
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i> Payments </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/money-requests"class="dashboard-nav-dropdown-item">My Transactions</a>
                        <a href="/payment-history" class="dashboard-nav-dropdown-item">Billing Information</a>
                    </div>
                </div>

                <a href="{{ route('chatify') }}" target="_blank" class="dashboard-nav-item"><i class="fa-solid fa-comments"></i> Messaging </a>
                <a href="/profile" class="dashboard-nav-item"><i class="fa-regular fa-user"></i> My Profile </a>
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
            <div class='dashboard-content' style="padding: 0px;">
                <div class="top-row">
                <a href="/user/arts" >All Posts</a>
                    <a href="/user/blogs" style="border-bottom: 2px solid #fff;">All Blogs</a>
                    <a href="/user/tips">All Tips</a>
                </div>
            </div>
            <div class="gallery" style="padding-left: 50px;padding-right:20px;padding-top: 20px;">
    @foreach ($allBlogs as $blog)
        <div class="blog-post">
            @if ($blog->image_path)
                <img src="{{ asset('storage/' . $blog->image_path) }}" alt="Blog Image" class="blog-image">
            @endif
            <div class="blog-post-content">
                <h3  style="font-family: fantasy;font-size: 25px;color: #309093;"><b>{{ $blog->title }}</b></h3>
                <p  style="font-family: revert;color: #1e5d17;"><strong>Author:</strong> {{ $blog->user->name }}</p>
                <p style="font-family: math;color: #7a451f;"> {{ $blog->content }}</p>
                <p><strong>Created At:</strong> {{ $blog->created_at }}</p>

                {{-- Add any other details you want to display --}}
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
        </script>
</body>

</html>