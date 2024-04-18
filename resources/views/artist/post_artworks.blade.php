<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Artworks</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <style>
        .row.it {
            width: 85%;
            padding-left: 265px;
            font-family: fangsong;
        }

        #one {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #one h2 {
            margin-top: 0;
            padding-top: 50px;
            padding-left: 170px;
            color: red;
            font-family: fangsong; 
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .file-wrapper {
            position: relative;
            overflow: hidden;
        }

        .file-wrapper input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-wrapper::before {
            content: 'Choose File';
            display: inline-block;
            background: #4caf50;
            color: white;
            padding: 8px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .file-wrapper::after {
            content: attr(data-content);
            display: inline-block;
            margin-left: 10px;
        }

        .file-wrapper:hover::before {
            background: #45a049;
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
                <a href="#" class="dashboard-nav-item"><i class="fa-solid fa-comments"></i>Messaging</a>

                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-regular fa-images"></i>My Top Arts</a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/top-user-artworks" class="dashboard-nav-dropdown-item">Most Liked</a>
                    </div>
                </div>
                <a href="{{route ('update-profile') }}" class="dashboard-nav-item"><i class="fas fa-user"></i>Profile Updation</a>

                <a href="/announcements/show" class="dashboard-nav-item"><i class="fa-solid fa-bullhorn"></i>Announcements</a>
                <div class="nav-item-divider"></div>

                <a href="#" class="dashboard-nav-item" id="logout-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
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
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>\

            <div class="row it">
            <h2 style="display:flex; color:#10188d;justify-content: center; font-family: fangsong; font-weight:bold; padding-bottom :20px;">POST ARTWORK</h2>
                <div class="col-sm-offset-1 col-sm-10" id="one">
                    <!-- <h2>Create New Artwork</h2> -->
                    
        <form action="{{ route('post.artwork') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="artTitle">Artwork Title:</label>
            <input type="text" id="artTitle" name="artTitle" required>
        </div>

        <div class="form-group">
            <label for="artCategory">Categories:</label>
            <select id="artCategory" name="artCategory" required>
                <option value="Pencil Art">Pencil Art</option>
                <option value="Pen Art">Pen Art</option>
                <option value="Stencil Art">Stencil Art</option>
                <option value="Doodle Art">Doodle Art</option>
                <option value="Digital Art">Digital Art</option>
                <option value="Typography Art">Typography Art</option>
                <option value="Mandala Art">Mandala Art</option>
            </select>
        </div>

        <div class="form-group">
            <label for="artDescription">Artwork Description:</label>
            <textarea id="artDescription" name="artDescription" rows="4" minlength="50" required></textarea>
        </div>

        <div class="form-group">
            <label for="artworkImage">Artwork Image:</label>
            <input type="file" id="artworkImage" name="artworkImage" accept="image/*" required>
        </div>

        <button type="submit">Submit</button>
    </form>
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