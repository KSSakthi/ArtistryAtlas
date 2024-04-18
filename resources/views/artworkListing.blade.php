<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtWork Listing</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    
<style>
    .artwork {
        display: flex;
        flex-wrap: wrap;
    }
    .artwork-item {
        flex-basis: 30%;
        margin: 10px 20px -90px 20px;
    }
    .artwork-item img {
        width: 100%;
        height: 60%;
    }
    .artwork-item h2 {
        font-family: Arial, sans-serif;
        font-size: 1.5rem;
        color: #60025e;
        margin-top: 10px;
    }
    .artwork-item p {
        font-family: Arial, sans-serif;
        font-size: 1rem;
        color: #333;
        margin-bottom: 5px;
    }
</style>
</head>

<body>
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <img src="Images/Logo.png" alt="Logo" class="logo" style="width:250px;height:80px;">

            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="#!">Categories</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="/pencilart">Pencil Art</a>
                            </li>
                            <li>
                                <a href="/penart">Pen Art</a>
                            </li>
                            <li>
                                <a href="/stencilart">Stencil Art</a>
                            </li>
                            <li>
                                <a href="/doodleart">Doodle Art</a>
                            </li>
                            <li>
                                <a href="/digitalart">Digital Art</a>
                            </li>
                            <li>
                                <a href="/typographyart">Typography Art</a>
                            </li>
                            <li>
                                <a href="/mandalaart">Mandala Art</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/gallery">Gallery</a>
                    </li>
                    <!-- <li>
                        <a href="#!">Resources</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="/blogss">Blog</a>
                            </li>
                            <li>
                                <a href="#!">Books(Tips)</a>
                            </li>
                            <li>
                                <a href="#!">Video Tutorial</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="#!">JoinUs</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="{{ route('artist.login') }}">Artist</a>
                            </li>
                            <li>
                                <a href="{{ route('user.login') }}">User</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </section><br>
    <img src="https://cdn.pixabay.com/photo/2017/07/15/15/50/fantasy-2506830_1280.jpg" style="    max-width: 83%;
    max-height: 800px;
    padding: 20px 0px 20px 228px;"><br><br>
    <div>
        <h2 style="font-style:Inknut Antiqua;color:#941C1C;text-align: center;margin: 32px 0px -13px 0px;">ARTWORK LISTINGS WITH DETAILS</h2><br><br>

        <div class="ab_art">
            <p style="text-align:center; padding:20px 90px 0px 90px ;">Dive into our expansive collection of artwork listings, meticulously crafted to unveil the nuances of each creation. From vibrant brushstrokes to intricate details, our listings provide a visual journey into the heart of artistic expression. Experience a fusion of creativity and insight as you browse through dimensions, styles, and the soulful stories embedded in every piece.</p><br>

            <p style="text-align:center;padding:20px 90px 0px 90px ;">Step into a realm where creativity knows no bounds, and artistic expression transcends mere form. Our artwork listings offer more than just a glimpse into the world of visual art; they serve as portals to unique universes, each with its own narrative, emotion, and essence.
                Immerse yourself in a symphony of colors, shapes, and textures as you explore our curated collection. From the bold strokes of modern abstracts to the delicate intricacies of classical masterpieces, every listing is a testament to the boundless potential of human imagination.
                But these listings are more than just catalog entries; they are windows into the souls of the artists who brought them to life. Discover the stories behind the strokes, the inspirations that sparked each creation, and the journeys that led to their fruition.</p><br>
            <p style="text-align:center; padding:20px 90px 0px 90px ;">Whether you're a seasoned art aficionado or an adventurous novice, there's something for everyone within our listings. Lose yourself in the hypnotic dance of light and shadow, the evocative power of symbolism, and the raw energy of artistic experimentation.
                Each listing is a treasure trove waiting to be uncovered, inviting you to embark on a visual odyssey unlike any other. So take a deep breath, open your mind, and let the artwork speak to you in ways words alone cannot express.</p>
<br>
        </div>

        <section class="artwork">
            <div class="artwork-item">
                <img src="https://cdn.pixabay.com/photo/2019/02/19/13/40/horse-4006848_1280.jpg" alt="Artwork 1">
                <h2><center>Pencil Art</center></h2><br>
                <p><strong>Description:</strong> "Through meticulous shading and delicate precision, the pencil rendering unveils the raw beauty and noble spirit of the majestic horse, captivating viewers with its grace and power."</p>
                <br><p><strong> Artist Name: </strong>John Doe</p>
                <!-- <p>Price: $500</p> -->
            </div>

            <!-- <div class="artwork-item">
                <img src="https://imgs.search.brave.com/sPGEc8306UZFWVFZlzidWqaa333Pqcdvpwdmh2geD2M/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2MzLzcz/L2M5L2MzNzNjOTI1/ZWZjNWE0ZTBiOWQ3/NjZhZjc3NjZhOGFj/LmpwZw" alt="Artwork 2">
                <h2><center>Pen Art</center></h2><br>
                <p><strong>Description:</strong> "With deft pen strokes, a solitary figure emerges, imbued with depth and emotion, capturing the essence of solitude and contemplation."</p>
                <p><strong> Artist Name: </strong>Jane Smith</p>
          
            </div> -->
            <div class="artwork-item">
                <img src="Images/typography.jpeg" alt="Artwork 2">
                <h2><center>Typography Art</center></h2><br>
                <p><strong>Description:</strong> "In this dynamic fusion of typography, fonts converge harmoniously, colors pulse with vibrancy, and shapes intertwine with elegance, crafting an evocative masterpiece that speaks volumes to the soul."</p>
                <br><p><strong>Artist Name:</strong> Jane Smith</p>
               
            </div>
            <div class="artwork-item">
                <img src="Images/Doodle.jpeg" alt="Artwork 3">
                <h2><center>Doodle Art<center></h2><br>
                <p><strong>Description: </strong> "In a playful swirl of lines and shapes, a lion's regal mane cascades with whimsy, capturing the wild spirit and majestic allure of the king of the savannah in this vibrant doodle."</p>
               <br> <p><strong>Artist Name: </strong> Michael Johnson</p>
                <!-- <p>Price: $900</p> -->
            </div>
           
        </section>
        
        <!-- <section class="artwork">
            <div class="artwork-item">
                <img src="Images/stencil.jpeg" alt="Artwork 1">
                <h2><center>Stencil Art</center></h2><br>
                <p><strong>Description: </strong> "A majestic lion, rendered with precision in stencil art, emanates strength and dignity in every line."</p>
                <p><strong>Artist Name:</strong> John Doe</p>
               
            </div>

            <div class="artwork-item">
                <img src="Images/typography.jpeg" alt="Artwork 2">
                <h2><center>Typography Art</center></h2><br>
                <p><strong>Description:</strong> "Inspiring words dance in a symphony of fonts, colors, and shapes, forming a captivating piece of typography art."</p>
                <p><strong>Artist Name:</strong> Jane Smith</p>
               
            </div>

            <div class="artwork-item">
                <img src="Images/mandala.jpeg" alt="Artwork 3">
                <h2><center>Mandala Art</center></h2><br>
                <p><strong>Description:</strong> "Intricate patterns spiral outward, forming a mesmerizing mandala that invites contemplation and inner harmony."</p>
                <p><strong>Artist Name:</strong> Michael Johnson</p>
               
            </div>
        </section> -->


        <!-- Footer -->
        <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pt-5 pb-5" style="padding: 30px;">
                    <div class="row" style="display: flex;">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>1010 Avenue, sw 54321, chandigarh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Call us</h4>
                                    <span>9876543210 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="far fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Mail us</h4>
                                    <span>mail@info.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section about">
                        <img src="Images/Logo.png" alt="Logo" class="logo" style="width:250px;height:100px;margin-right:580px;">
                        <p style="margin-top:30px;    font-family: serif;
          line-height: 1.5;">
                            Artistry Atlas: Your global hub for limitless creativity. Immerse in curated artworks, connect with creators worldwide, and redefine the language of art. Explore, engage, and be part of a thriving community shaping the future of creative expression.
                        </p>
                    </div>
                    <div class="footer-section links">
                        <h2 style="margin-top:20px;margin-left: 25px;">Useful Links</h2>
                        <ul style="margin-top:40px;font-family: serif; font-size: larger;">
                            <div class="sa" style="display:flex;padding-left:20px;height:auto;width:90px;">
                                <div class="fo" style="padding-right:40px;">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                </div>
                                <div class="fo">
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Books</a></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="footer-section social">
                        <h2 style="margin-top:20px;">Follow Us</h2><br>
                        <p style="margin-top:30px;font-family: serif; font-size: large;">Stay connected on social media for updates and more.</p><br>
                        <div class="social-links" style="font-size: 30px;">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>