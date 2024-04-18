<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<style>
    .image-row {
        display: flex;
        justify-content: space-around;
        padding-top: 25px;
        padding-bottom:30px ;
        background-color: #f6f6f7;
    }
    .image-row img {
        width: 200px;
        height: 150px;
    }
    .image-container {
        text-align: center;
    }
    .image-container img {
        width: 150px;
        height: 143px;
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
    .special-paragraph {
        color: blue;
        font-size: 18px;
        font-weight: bold;
        font-family: Arial, sans-serif;
        line-height: 1.5; 
        text-align: center; 
        margin: 20px; 
        padding: 10px;
        background-color: lightgray; 
        border: 1px solid darkblue; 
        border-radius: 5px; 
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }
    .special-paragraph:hover {
        background-color: darkblue;
        color: white;
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
                        <span class="profession" style="color: #E6E6FA;padding-left: 15px;"><b>ADMIN</b></span>
                    </div>
                </div>
            </header>
            <br>
            <nav class="dashboard-nav-list">
                <a href="/dashboard" class="dashboard-nav-item"><i class="fas fa-home"></i>Dashboard </a>
                <a href="/users" class="dashboard-nav-item"><i class="fa-solid fa-users"></i>Manage Users </a>
                <a href="/artworks" class="dashboard-nav-item"><i class="fa-solid fa-paintbrush"></i>Manage Artworks </a>
                <a href="/blogs" class="dashboard-nav-item"><i class="fa-solid fa-file-pen"></i>Manage Blogs</a>
                <a href="/tutorials" class="dashboard-nav-item"><i class="fa-solid fa-person-chalkboard"></i>Manage Tutorials </a>
                <a href="/tipsadmin" class="dashboard-nav-item"><i class="fa-brands fa-leanpub"></i>Manage Tips </a>

                <a href="/announcements" class="dashboard-nav-item"><i class='bx bxs-notification'></i>Announcements </a>

                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i> Payments </a>
                    <div class='dashboard-nav-dropdown-menu'>
                    <a href="/transactions" class="dashboard-nav-dropdown-item">Transaction Details</a>
                        <a href="/earnings" class="dashboard-nav-dropdown-item">Earnings Overview</a>
                    </div>
                </div>
                <br><br>
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
            <div class="image-row">
    <div class="image-container">
    <a href="/users">   <img src="{{ asset('Dash/user1.png') }}" alt="Image 1"></a>
        <div class="anchor-container">
            <a href="/users" class="special-link">Manage Users</a>
            <p class="special-paragraph">Total Number of Users: {{ $totalType0Users }}</p>
        </div>
    </div>
    <div class="image-container">
    <a href="/users">  <img src="{{ asset('Dash/user2.png') }}" alt="Image 2"></a>
        <div class="anchor-container">
            <a href="/users" class="special-link">Manage Artist</a>
            <p class="special-paragraph">Total Number of Artist : {{ $totalType2Users }}</p>
        </div>
    </div>

    <div class="image-container">
    <a href="/blogs">  <img src="{{ asset('Dash/blog2.png') }}" alt="Image 3"></a>
        <div class="anchor-container">
            <a href="/blogs" class="special-link">Manage Blogs</a>
            <p class="special-paragraph">Total Number of Blogs: {{ $totalblogs}}</p>
        </div>
    </div>
</div>

<div class="image-row" style="padding-left: 35px;">
    <div class="image-container">
     <a href="/artworks">  <img src="{{ asset('Dash/3.jpeg') }}" alt="Image 4"></a>
        <div class="anchor-container">
            <a href="/artworks" class="special-link">Manage Arts</a>
            <p class="special-paragraph">Total Number of Artworks: {{$totalArts}}</p>
        </div>
    </div>

    <div class="image-container">
    <a href="/tipsadmin"> <img src="{{ asset('Dash/tips2.png') }}" alt="Image 3"></a>
        <div class="anchor-container">
            <a href="/tipsadmin" class="special-link">Manage Tips</a>
            <p class="special-paragraph">Total Number of Tips: {{ $totalTip}}</p>
        </div>
    </div>

    <div class="image-container">
    <a href="/announcements"> <img src="{{ asset('Dash/announce.jpeg') }}" alt="Image 3"></a>
        <div class="anchor-container">
            <a href="/announcements" class="special-link">Manage Announcements</a>
            <p class="special-paragraph">Total Number of Annoucement: {{$totalAnnounce}}</p>
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