<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Updation</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    .label {
        display: inline-block;
        width: 45%; 
        margin-bottom: 15px;
        margin-left: 24px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
        width: calc(100% - 12px);
    }
    button[type="submit"] {  
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 6px;
        border-color: black;
        background-color: #afc8eb;
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
                        <a href="/user-artworks"class="dashboard-nav-dropdown-item">Edit Artwork</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-pen-to-square"></i>Blog Posts </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/artist/blog_post" class="dashboard-nav-dropdown-item">Create New Blog</a>
                        <a href="/user-blog-posts"class="dashboard-nav-dropdown-item">Edit Blog</a>
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
                        <a href="/artist/post_tipstricks" class="dashboard-nav-dropdown-item">Tips </a>
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
                <a href="#" class="dashboard-nav-item"><i class="fa-solid fa-comments"></i> Messaging </a>

                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-regular fa-images"></i> My Top Arts </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/top-user-artworks"class="dashboard-nav-dropdown-item">Most Liked</a>
                    </div>
                </div>
                <a href="{{route ('update-profile') }}" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile Updation </a>

                <a href="/announcements/show" class="dashboard-nav-item"><i class="fa-solid fa-bullhorn"></i> Announcements </a>
                <div class="nav-item-divider"></div>

                <a href="#" class="dashboard-nav-item" id ="logout-link"><i class="fas fa-sign-out-alt"></i> Logout </a>
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
        <div class="update-profile-container">
  
        <label style="color: #7c5d18; font-style: normal; font-size: 25px; font-family: ui-sans-serif;padding-left:500px;"><b>MY PROFILE</b></label><br>
          
        <form action="{{ route('update-profile') }}" method="post" onsubmit="return validateForm()">
        @csrf
            <fieldset style="margin-left: 130px;margin-right: 130px;font-family: emoji;font-size: 18px;font-weight: 600;color: #5a0b6d;">
                <legend style="color: #455b0c;">Personal Information</legend>
                <div class="label" >
                    <label> Name</label><br>
                    <input type="text" id="firstname" name="name" style="padding:10px;width:100%" required value="{{ $user->name }}">
                </div>
                <div class="label">
                    <label> UserName</label><br>
                    <input type="text" id="username" name="username" style="padding:10px;width:100%" required value="{{ $user->username }}"disabled>
                </div>
                <div class="label">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" style="padding:10px;width:100%" required value="{{ $user->email }}" disabled>
                </div>
              
                <div class="label">
                    <label for="phonenumber">Phone Number</label><br>
                    <input type="tel" id="phonenumber" name="phonenumber" style="padding:10px;width:100%" required value="{{ $user->phonenumber }}">
                </div>

                <div class="label">
                    <label for="portfolio">Portfolio Link</label><br>
                    <input type="text" id="portfolio" name="portfolio" style="padding:10px;width:100%" value="{{ $user->portfolio }}">
                </div>
                <div class="label">
                    <label for="socialmedia">Social Media Link</label><br>
                    <input type="text" id="socialmedia" name="socialmedia" style="padding:10px;width:100%" value="{{ $user->socialmedia }}">
                </div>
              
                <div class="label">
                    <label>Artist Biography</label>
                    <textarea id="bio" name="bio" rows="4" cols="104">{{ $user->bio }}</textarea><br>
                    <label>Artistic Aspirations</label>
                    <textarea id="artistic_aspirations" name="artistic_aspirations" rows="4" cols="104">{{ $user->artistic_aspirations }}</textarea><br>
                    <label>Artist Quote</label>
                    <textarea id="artist_quote" name="artist_quote" rows="4" cols="104">{{ $user->artist_quote }}</textarea><br>
                </div>
                <br>
                <center> <button type="submit" class="submit"><center>Update Profile</center></button></center>
            </fieldset>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        const mobileScreen = window.matchMedia("(max-width: 990px )");
        $(document).ready(function () {
        $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
        });
        $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
        });
    });

    document.getElementById('choose-profile-picture-btn').addEventListener('click', function() {
        document.getElementById('profile_picture').click();
    });
    </script> 
</body>
</html>
