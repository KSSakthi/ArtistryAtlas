
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tutorials</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <style>
        h1 {
            padding-top: 88px;
            padding-left: 85px;
        }

        form {
            margin-left: 190px;
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 70%; 
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
        }

        img {
            max-width: 200px;
            margin-top: 10px;
            display: block;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
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
                    <span class="profession"style="color: #E6E6FA;padding-left: 15px;"><b>ARTIST</b></span>
                </div>
            </div>            </header>
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

                <a href="/announcements/show" class="dashboard-nav-item"><i class="fa-solid fa-bullhorn"></i> Announcements </a>
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
            <header class='dashboard-toolbar' style="left:240px;"><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
  

    <h2 style="text-align: center;
            padding-top: 22px;
            color:#10188d;
            font-family: fangsong;
            font-weight:bold; 
            padding-bottom :20px;">Edit Tutorial</h2>

    <form action="{{ route('user.tutorial.update', $tutorial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $tutorial->title }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required>{{ $tutorial->description }}</textarea>
        </div>

        <div>
            <label for="videoFile">Upload New Video:</label>
            <input type="file" id="videoFile" name="videoFile" accept="video/*">
        </div>

        <div style="padding-top: 20px;padding-bottom: 20px;">
        <label for="currentVideo">Current Video: <br></label><br>
        <video controls style="    width: 730px;
    height: 300px;">
        <source src="{{ asset('storage/' . $tutorial->video_path) }}" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        </div>

        <button type="submit">Update Tutorial</button>
    </form>      </div>
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
