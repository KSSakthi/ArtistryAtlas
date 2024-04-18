<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - All Tips</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
</head>
<style>
    h1 {
        font-weight: bold;
    }
    .tip-container {
        margin-top: 20px;
        padding-left: 40px;
    }
    .tip {
        border: 1px solid #dba4a4;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #d5d4d9;
        border-radius: 7px;
    }
    h2 {
        margin-bottom: 10px;
        font-family: fangsong;
        color: #52aeb1;
    }
    .category {
        color: #3429d1;
        font-family: initial;
        font-size: 18px;
        font-weight: 600;
    }
    .instructions {
        color: #3429d1;
        font-family: initial;
        font-size: 18px;
        font-weight: 600;
    }
    p {
        margin-bottom: 15px;
    }
    .download-btn {
        padding: 8px 15px;
        background-color: #28a745;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        float: right; 
    }
    .recent {
        margin-top: 20px;
        color:#9d2b25;
        text-align: center; 
        font-family: fangsong; 
        font-weight:bold;
    }
    .instruction-content {
        color: #c35e49;
        font-family: math;
    }
    .category-name {
        color: #c35e49;
        font-family: math;
    }
</style>
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
            <div class="tip-container">
            <h2 class="recent">ALL ART TIPS</h2><br>
        @forelse($tips as $tip)
            <div class="tip">
                <h2>{{ $tip->title }}</h2>
                <p class="category"><b>Category:</b> <span class="category-name">{{ $tip->category }}</span></p>
                <p class="instructions"><b>Instructions:</b><span class="instruction-content"> <br>{{ $tip->instructions }}</span></p>
                <a href="{{ route('guest.tips.download', $tip) }}" class="download-btn">Download PDF</a>
            </div>
        @empty
            <p>No tips available.</p>
        @endforelse
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

            
    function confirmDelete(artworkId) {
        if (confirm('Are you sure you want to delete this artwork?')) {
            document.getElementById('delete-form-' + artworkId).submit();
        }
    }
</script>

</body>
</html>