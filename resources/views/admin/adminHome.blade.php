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
    .card {
      width: 300px;
      height: 200px;
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 10px;
      padding: 20px;
      box-sizing: border-box;
      float: left;
      overflow: hidden;
      position: relative;
    }

    .card-content {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 10px;
      color: #fff;
      text-align: center;
    }

    .card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .card-link {
      text-decoration: none;
      color: inherit;
      display: block;
    }
    .row{
      padding-left: 80px;
      padding-top: 20px;
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
                    <span class="profession"style="color: #E6E6FA;padding-left: 15px;"><b>ADMIN</b></span>
                </div>
            </div>
              </header>
              <br>
            <nav class="dashboard-nav-list">
                <a href="/manager/home" class="dashboard-nav-item"><i class="fas fa-home"></i>Dashboard </a>
                <a href="/users" class="dashboard-nav-item"><i class="fa-solid fa-users"></i>Manage Users </a>
                <a href="/artworks" class="dashboard-nav-item"><i class="fa-solid fa-paintbrush"></i>Manage Artworks </a>
                <a href="/blogs" class="dashboard-nav-item"><i class="fa-solid fa-file-pen"></i>Manage Blogs</a>
                <a href="/tutorials" class="dashboard-nav-item"><i class="fa-solid fa-person-chalkboard"></i>Manage Tutorials </a>
                <a href="/tipsadmin" class="dashboard-nav-item"><i class="fa-brands fa-leanpub"></i>Manage Tips </a>

                <a href="/announcements" class="dashboard-nav-item"><i class='bx bxs-notification'></i>Announcements </a>
              
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i> Payments </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="#" class="dashboard-nav-dropdown-item">Transaction Details</a>
                        <a href="#" class="dashboard-nav-dropdown-item">Earnings Overview</a>
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
            <div class="row" style="padding-bottom: 20px;">
  <!-- First Row -->
  <a href="manage_users_page.html" class="card">
    <img src="{{ asset('Images/1.png') }}" alt="Manage Users" class="card-img">
    <div class="card-content">
      <h2>Manage Users</h2>
      <p>Manage users' accounts and permissions.</p>
    </div>
  </a>
  <a href="manage_artworks_page.html" class="card">
    <img src="{{ asset('Images/2.png') }}" alt="Manage Artworks" class="card-img">
    <div class="card-content">
      <h2>Manage Artworks</h2>
      <p>Manage artworks uploaded by artists.</p>
    </div>
  </a>
  <a href="manage_blogs_page.html" class="card">
    <img src="{{ asset('Images/blog.png') }}" alt="Manage Blogs" class="card-img">
    <div class="card-content">
      <h2>Manage Blogs</h2>
      <p>Manage blog posts and articles.</p>
    </div>
  </a>
</div>

<div class="row" style="padding-top: 60px;">
  <!-- Second Row -->
  <a href="manage_tutorials_page.html" class="card">
    <img src="{{ asset('Images/video-tutorials.png') }}" alt="Manage Tutorials" class="card-img">
    <div class="card-content">
      <h2>Manage Tutorials</h2>
      <p>Manage tutorials and educational content.</p>
    </div>
  </a>
  <a href="manage_tips_page.html" class="card">
    <img src="{{ asset('Images/tips-and-tricks.png') }}" alt="Manage Tips" class="card-img">
    <div class="card-content">
      <h2>Manage Tips</h2>
      <p>Manage tips and advice for users.</p>
    </div>
  </a>
  <a href="manage_announcements_page.html" class="card">
    <img src="{{ asset('Images/announcement.png') }}" alt="Manage Announcements" class="card-img">
    <div class="card-content">
      <h2>Manage Announcements</h2>
      <p>Manage system announcements.</p>
    </div>
  </a>
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