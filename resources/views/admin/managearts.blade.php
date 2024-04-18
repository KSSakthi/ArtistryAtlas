<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Artworks</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<style> 
    table {
        border: 1px solid #2c0d7b;      
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 8px;
    }
    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        border: 1px solid black;
    }

    th {
        background-color: white;
        color: #740808;
    }

    tr:nth-child(even) {
        background-color: #f4f8ff; 
    }

    tr:nth-child(odd) {
        background-color: #ccd3e2; 
    }

    .delete-btn {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: #cc0000;
    }
    .space{
        padding-left: 49px;
        padding-right: 41px;
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
                    <div class="space">
                    <table>
        <thead>
            <tr>
                <th>ARTIST NAME</th>
                <th>TITLE</th>
                <th>CATEGORY</th>
                <th>DESCRIPTION</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artworks as $artwork)
                <tr>
                    <td>{{ $artwork->user->name}}</td>
                    <td>{{ $artwork->art_title }}</td>
                    <td>{{ $artwork->art_category }}</td>
                    <td>{{ $artwork->art_description }}</td>
                    <!-- <td>
                        @if($artwork->artwork_image_path)
                            <img src="{{ asset($artwork->artwork_image_path) }}" alt="Artwork Image" class="artwork-image">
                        @else
                            No Image
                        @endif
                    </td> -->
                    <td>
                        <form action="{{ route('artworks.destroy', $artwork->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
