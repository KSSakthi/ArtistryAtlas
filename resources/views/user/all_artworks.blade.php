<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - All Artworks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-wsY7J8Fuvp9RCX3D0ntIHtF6bRo3S49Md1pR58gH2Egn2EA5/9S+id7fGmpRSe5gH8coAzl1SBxgk6t+n/DHQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<style>
    .gallery {
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    .gallery .artwork {
        border: 2px solid #3498db;
        padding: 20px;
        text-align: center;
        background-color: #f2f2f2;
        border-radius: 10px;
    }
    .gallery .artwork img {
        width: 100%;
        height: 200px; 
        object-fit: cover; 
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    .gallery .artwork h3 {
        color: #7f12a3;
        margin-top: 0;
        font-family: math;
        font-size: 22px;
    }
    .gallery .artwork p {
        color: #716cca;
        margin-bottom: 10px;
        font-family: system-ui;
        font-size: 15px; 
    }
    .gallery .artwork form {
        margin-top: 15px; 
    }
    .gallery .artwork button {
        padding: 8px 15px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .gallery .artwork button:hover {
        background-color: #2980b9;
    }
    .gallery .artwork .comments {
        margin-top: 20px;
        border-top: 1px solid #ddd;
        padding-top: 10px;
    }
    .gallery .artwork .comments h4 {
        color: #3498db;
        margin-bottom: 10px;
    }
    .gallery .artwork .comments p {
        color: #555;
        margin-bottom: 5px;
    }
    .gallery .artwork .comments form {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
    }
    .gallery .artwork .comments textarea {
        flex: 1;
        width: calc(100% - 85px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        resize: vertical; 
        transition: border-color 0.3s;
    }
    .gallery .artwork .comments textarea:focus {
        border-color: #3498db; 
    }
    .gallery .artwork .comments button {
        flex: 0 0 auto;
        width: 75px;
        padding: 10px 15px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .gallery .artwork .comments button:hover {
        background-color: #2980b9;
    }
    .gallery .artwork .comments .view-all {
        text-align: right;
        margin-top: 10px;
    }
    .gallery .artwork .comments .view-all a {
        color: #3498db;
        text-decoration: underline;
        cursor: pointer;
    }
    .gallery .artwork .comments .view-all a:hover {
        color: #2980b9;
    }
    .recent {
        margin-top: 20px;
        color:#9d2b25;
        text-align: center; 
        font-family: fangsong; 
        font-weight:bold;
    }
    .search-filter {
        margin-bottom: 20px;
    }
    .search-filter form {
        display: flex;
        align-items: center;
    }
    .search-filter select {
        margin-right: 10px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .search-bar{
        margin-right: 10px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 40%;
        margin-left: 54px;
    }
    .search-filter button {
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .search-filter button:hover {
        background-color: #0056b3;
    }
    .comment-form-container form {
        display: flex;
        align-items: center; 
    }
    .comment-form-container textarea {
        flex: 1; 
        margin-right: 10px; 
    }
    .comment-form-container button {
        flex-shrink: 0; 
    }
    .comments-container {
        display: flex;
        align-items: center; 
    }
    .comments-container h4 {
        color: #d85583;
        font-family: math;
        font-size: 18px;
        font-weight: 800;
        margin-right: 10px; 
    }
    .comments-container p {
        display: inline; 
    }
    .comments-container h5 {
        color: #d85583;
        font-family: math;
        font-size: 16px;
        font-weight: 800;
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
            <div class='dashboard-content1' style="padding-left:30px;">
            <div class='container'>
    <h2 class="recent">ALL ARTWORKS</h2><br>
    <div class="search-filter">
        <form action="{{ route('artworks.search') }}" method="GET">
            <input type="text" name="query" placeholder="Search by title or artist" class="search-bar">
            <select id="artCategory" name="category">
                <option value="">All Categories</option>
                <option value="Pencil Art">Pencil Art</option>
                <option value="Pen Art">Pen Art</option>
                <option value="Stencil Art">Stencil Art</option>
                <option value="Doodle Art">Doodle Art</option>
                <option value="Digital Art">Digital Art</option>
                <option value="Typography Art">Typography Art</option>
                <option value="Mandala Art">Mandala Art</option>
            </select>
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="gallery">
    @foreach ($allArtworks as $artwork)
        <div class="artwork">
        <p><strong>Art By:</strong><span style="color:#555"> {{ $artwork->user->name }}</span></p>

            <h3>{{ $artwork->art_title }}</h3>
           
            <img src="{{ asset('storage/' . $artwork->artwork_image_path) }}" alt="Artwork Image">
            <p><strong>Category:</strong><span style="color:#555"> {{ $artwork->art_category }}</span></p>
            <p><strong>Description:</strong> <span style="color:#555">{{ $artwork->art_description }}</span></p>

            {{-- Like Button --}}
            <form action="{{ route('artworks.like', $artwork->id) }}" method="POST">
                @csrf
                
                    @if($artwork->likes->contains('user_id', Auth::id()))
                    <button type="submit" class="btn btn-danger">
            <i class="fas fa-heart"></i> Unlike
        </button>
                    @else
                    <button type="submit" class="btn btn-primary">
                        <i class="far fa-heart"></i> Like
                    </button>
                    @endif
               
            </form>
            <br>
            {{-- Comment Section --}}
            <div>
            <div class="comments-container">
                @if($artwork->comments->isEmpty())
                    <h5>No comments yet</h5>
                @else
                <h4>Comments -</h4>
                @foreach ($artwork->comments as $comment)
                    <p>{{ $comment->user->name }}: {{ $comment->comment }}</p>
                @endforeach
                @endif
            </div>
                {{-- Add Comment Form --}}
                <div class="comment-form-container">
                    <form action="{{ route('artworks.comment', $artwork->id) }}" method="POST">
                        @csrf
                        <textarea name="comment" placeholder="Add your comment" required></textarea>
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
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