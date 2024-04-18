<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Liked Artworks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

</head>
<style>
    .gallery {
        padding: 60px;
        padding-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    .gallery div {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }
    .gallery img {
        width: 100%;
        height: 200px; 
        object-fit: cover; 
    }
    .gallery div h2 {
        margin-top: 0; 
    }
    .gallery div p {
        color: #69660e;
        margin-bottom: 10px;
        font-family: system-ui;
        font-size: 15px; 
    }
    .edit-delete {
        margin-top: 10px;
        display: flex; 
        justify-content: space-between; 
    }
    .edit-delete a,
    .edit-delete button {
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .edit-delete button {
        background-color: #dc3545; 
    }
    .btn1 i{
        color: red;
        font-size: 25px;
    }
    .btn1{
        padding: 6px;
        background-color: transparent;
        font-family: fangsong;
        font-size: 25px;
        font-weight: 600;    
        border: none;
    }
    .btn1 i:hover{
        color: black;
        cursor: pointer;
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
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa-solid fa-bookmark"></i>My Contributions</a>
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
            <br><h2 style="color:#9d2b25;font-family: fangsong;"><b><center>MY LIKED ARTWORKS</center> </b></h2>
            <div class="gallery">
            @foreach ($likedArtworks as $artwork)
            <div class="artwork">
                <h3 style="color: #b61148;font-family: auto;font-size: 20px;font-weight: 500;"><strong>{{ $artwork->art_title }}</strong></h3>
                <img src="{{ asset('storage/' . $artwork->artwork_image_path) }}" alt="Artwork Image">
                <p><strong>Category:</strong> <span style="color:#555"> {{ $artwork->art_category }}</span></p>
                <p><strong>Description:</strong><span style="color:#555">  {{ $artwork->art_description }}</span></p>
                {{-- Add any other details you want to display --}}
                <form action="{{ route('artworks.like', $artwork->id) }}" method="POST">
                @csrf
                    @if($artwork->likes->contains('user_id', Auth::id()))
                    <button type="submit" class="btn1">
                    <i class="fas fa-heart"></i> Unlike
                    </button>
                    @endif
                </form>
            </div>
        @endforeach
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