
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Profile Updation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
<style>
    .profile-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        font-family: Arial, sans-serif; 
    }
    .profile-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .profile-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .profile-form input[type="text"],
    .profile-form input[type="email"],
    .profile-form input[type="tel"],
    .profile-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 16px; 
    }
    .profile-form textarea {
        resize: vertical; 
    }
    .profile-form button[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease; 
    }   
    .profile-form button[type="submit"]:hover {
        background-color: #45a049;
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
                    <span class="profession"style="color: #E6E6FA;padding-left: 15px;"><b>USER</b></span>
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
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-bookmark"></i> My Contributions </a>
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
            <div class='dashboard-content'>
            <h2 style="font-family: fangsong; font-weight:bold;color: #10188d;"><center>PROFILE UPDATION</center> </h2><br>
            <div class="profile-form">

    <form action="{{ route('profile.update') }}" method="post">
        @csrf
        @method('PUT')

        <div>
           
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" disabled>
        </div>

        <div>
            <label for="phonenumber">Phone Number:</label>
            <input type="tel" id="phonenumber" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}" required>
        </div>

        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" rows="4" required>{{ old('bio', $user->bio) }}</textarea>
        </div>

        <button type="submit">Update Profile</button>
    </form>
</div>

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
    </script>
</body>
</html>

