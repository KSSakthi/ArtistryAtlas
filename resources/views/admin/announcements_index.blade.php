<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1, h2, h3 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"],
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }

        hr {
            margin: 20px 0;
        }
        .space{
            padding-left: 49px;
            padding-right: 41px;
        }
        .create-announcement {
            background-color: #e1e0e7;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .create-announcement h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .create-announcement label {
            color: #333;
        }

        .create-announcement input[type="text"],
        .create-announcement textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .create-announcement input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .create-announcement input[type="submit"]:hover {
            background-color: #45a049;
        }
        .announcement-list table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .announcement-list th, .announcement-list td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .announcement-list th {
            background-color: #f2f2f2;
            color: #333;
        }

        .announcement-list tr:nth-child(even) {
            background-color: #f9f9f9; 
        }

        .announcement-list tr:nth-child(odd) {
            background-color: #ffffff; 
        }

        .announcement-list tr:hover {
            background-color: #f5f5f5;
        }

        .announcement-list td button {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .announcement-list td button:hover {
            background-color: #cc0000;
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
                    <!-- Display success message using JavaScript -->
    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <!-- Create Announcement Form -->
    <div class="create-announcement">
    <h2 style="color: #640b54;
            text-align: center;
            font-family: 'boxicons';
            font-size: 30px;
            font-weight: 600;">Create Announcement</h2>
    <form method="post" action="{{ route('announcements.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>

        <label for="content">Content:</label>
        <textarea name="content" rows="7" cols="70"required></textarea><br>

        <input type="submit" value="Add Announcement">
    </form>
</div>

<hr>

    <!-- List of Announcements -->
    <div class="announcement-button">
    <button id="announcement-toggle-btn">Show Announcements</button>
</div>

<div class="announcement-list" style="display: none;">
    <!-- Table to display announcements -->
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($announcements as $announcement)
            <tr>
                <td>{{ $announcement->title }}</td>
                <td>{{ $announcement->content }}</td>
                <td>
                    <form method="post" action="{{ route('announcements.destroy', $announcement->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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

            document.getElementById('announcement-toggle-btn').addEventListener('click', function() {
        var announcementList = document.querySelector('.announcement-list');
        if (announcementList.style.display === 'none') {
            announcementList.style.display = 'block';
            this.textContent = 'Hide Announcements';
        } else {
            announcementList.style.display = 'none';
            this.textContent = 'Show Announcements';
        }
    });
        </script>
</body>
</html>