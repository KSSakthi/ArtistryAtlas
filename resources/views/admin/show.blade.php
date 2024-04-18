<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .container {
            padding: 0 50px 0 105px;
            width: 100%;
            height: auto;
            margin: 0 auto;
            background-color: white; 
        }

        h1 {
            color: #640b54;
            text-align: center;
            font-family: 'boxicons';
            font-size: 30px;
            font-weight: 600;
           
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd; 
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
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
            <div class="container">
        <h1>All Transactions</h1>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>ARTIST NAME</th>
                        <th>USER NAME</th>
                        <th>AMOUNT</th>
                        <th>STATUS</th>
                        <th>CREATED AT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <!-- <td>{{ $transaction->id }}</td> -->
                        <td>{{ $transaction->sender->name }}</td>
                        <td>{{ $transaction->recipient->name }}</td>
                        <td>Rs.{{ $transaction->amount }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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