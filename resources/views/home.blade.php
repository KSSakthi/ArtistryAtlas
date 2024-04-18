<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel = "stylesheet" href = "{{ asset('css/home.css') }}" />   
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
</head>
<body>
    <!------------- NavBar -------------->
    <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <img src="{{ asset('Images/Logo.png') }}" alt="Logo" class="logo" style="width:250px;height:80px;">

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
    <!-- Carousel -->
    <div id="slider-container">
        <div class="slide active">
          <img src="Images/Ban1.jpeg" alt="Slide 1">
        </div>
        <div class="slide">
          <img src="Images/Ban2.jpeg" alt="Slide 2">
        </div>
        <div class="slide">
          <img src="Images/Ban3.jpeg" alt="Slide 3">
        </div>
        <!-- Add more slides as needed -->
      </div>
    

    <!-- Gallery Insights -->
    <div class="wrapper">
        <h1 style="font-size: 2.5rem;
        font-family: 'Montserrat';
        font-weight: normal;
        color: #190101;
        text-align: center;
        margin: 2rem 0;">GALLERY INSIGHTS</h1>
        <h2 style="text-align: center; font-family: Ibarra Real Nova; font-size: 2.5rem; color:#4B07A2"> Art in the gallery is a conversation among masterpieces, each piece contributing a chapter to the visual narrative</h2><br><br>
        <div class="cols">
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/pencil.jpeg)">
                              <div class="inner">
                                  <p>Pencil Art</p>
                    <span>Shades Speak Volumes</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                                <a href="/pencilart" style="text-decoration:none;color:#60025e;"><p>"Pencil art: a silent symphony of precision on paper, where emotions take tangible form in monochrome elegance."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/pen.jpeg)">
                              <div class="inner">
                                  <p>Pen Art</p>
                    <span>Pen Precision Poetry</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/penart" style="text-decoration:none;color:#60025e;"><p> "Pen art: eloquent precision, a visual language on canvas where each confident stroke whispers stories of creative command."</p></a>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/color.jpeg)">
                              <div class="inner">
                                  <p>Color Art</p>
                    <span>Colors Craft Emotion</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/colorart" style="text-decoration:none;color:#60025e;"><p>"Color art: a lively, emotive canvas where strokes speak the language of the soul, creating stories in a vibrant symphony of hues."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/stencil.jpeg)">
                              <div class="inner">
                                  <p>Stencil Art</p>
                    <span>Silent Stencil Narratives</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/stencilart" style="text-decoration:none;color:#60025e;"><p>"Stencil art: precise storytelling through shapes and layers, a visual language of artistic ingenuity on canvas."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/doodle.jpeg)">
                              <div class="inner">
                                  <p>Doodle Art</p>
                    <span>Joyful Doodle Expressions</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/doodleart" style="text-decoration:none;color:#60025e;"><p>"Doodle art: whimsical spontaneity on paper, each stroke a brush of creativity in a joyful abstract tapestry."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/digital.jpeg)">
                              <div class="inner">
                                  <p>Digital Art</p>
                    <span>Digital Dreams Captured</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/digitalart" style="text-decoration:none;color:#60025e;"><p>"Digital art: pixelated dreams on a canvas of technology, a symphony of colors echoing the artist's imagination on the screen."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/typography.jpeg)">
                              <div class="inner">
                                  <p>Typography Art</p>
                    <span>Letterforms Craft Emotion</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/typographyart" style="text-decoration:none;color:#60025e;"><p>"Typography art: letters as elegant strokes, crafting a visual poetry and a unique language of communication."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col" ontouchstart="this.classList.toggle('hover');">
                      <div class="container">
                          <div class="front" style="background-image: url(Images/mandala.jpeg)">
                              <div class="inner">
                                  <p>Mandala Art</p>
                    <span>Patterned Serenity Speaks</span>
                              </div>
                          </div>
                          <div class="back">
                              <div class="inner">
                              <a href="/mandalaart" style="text-decoration:none;color:#60025e;"><p>"Mandala art: intricate symmetry dances in circles, telling soulful stories of balance and harmony in meditative beauty."</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
       </div>
     <br><br>
<!-- Blog Cards -->
<div class="blog-card" style="display: flex;">
    <div class="image-container">
      <img src="https://img.freepik.com/free-photo/worker-reading-news-with-tablet_1162-83.jpg?size=626&ext=jpg&ga=GA1.1.1384681082.1701496373&semt=sph" alt="Blog Image" style="margin-left: 15px;
      margin-top: 15px;
      margin-bottom: 15px;">
    </div>
    <div class="content-container"><br><br>
      <h2 style="text-align: center;font-family: Ibarra Real Nova; font-size: 1.5rem; color:#60025e">ARTISTIC WAYS BLOG</h2>
     <br> <p style="font-family: Ibarra Real Nova; font-size: 1.5rem; padding-right:50px;" >Explore 'Artistic Atlas,' a poetic haven merging words with visual enchantment. Immerse in eloquent verse, captivating art, and evocative photography that paint a nuanced exploration of diverse perspectives, with a distinctive focus on indigenous issues. Beyond a mere collection, it's a symphony of emotions, a gallery where every stroke and pixel becomes a literary sanctuary. Traverse through these artistic landscapes, where the art of expression finds its vivid home.</p>
     <br><button class="read"> <a href="/blogss">Read More</a></button>
    </div>
</div>
<br><br>
<div class="blog-card1" style="display: flex; flex-direction: row-reverse;padding-left: 50px;">
    <div class="image-container1" >
      <img src="Images/Paid.jpeg" alt="Blog Image"style=" width: 700px;margin-left: 15px height:400px;
      margin-top: 15px;
      margin-bottom: 15px;">
    </div>
    <div class="content-container1"><br><br>
      <h2 style="text-align: center;font-family: Ibarra Real Nova; font-size: 1.5rem; color:#60025e">COMMISSIONING SYSTEM</h2>
     <br> <p style="font-family: Ibarra Real Nova; font-size: 1.5rem;" >Artistry Atlas facilitates direct artist-buyer communication via a private messaging system, streamlining the commissioning process. Artists showcase their unique styles, while buyers submit custom requests, ensuring a seamless and personalized experience for both parties. Experience the effortless collaboration where artistic visions come to life at Artistry Atlas.</p>
     <br><button class="read1"> <a href="/commissioning">Read More</a></button>
    </div>
</div>
<br><br>
<div class="blog-card" style="display: flex;">
    <div class="image-container">
      <img src="Images/ArtworkListing.png" alt="Blog Image"style="margin-left: 15px;
      margin-top: 15px;
      margin-bottom: 15px;">
    </div>
    <div class="content-container"><br><br>
    <h2 style="text-align: center;font-family: Ibarra Real Nova; font-size: 1.5rem; color:#60025e">ARTWORK LISTINGS WITH DETAILS</h2>
   <br> <p style="font-family: Ibarra Real Nova; font-size: 1.5rem; padding-right:50px;" >

    "Dive into our expansive collection of artwork listings, meticulously crafted to unveil the nuances of each creation. From vibrant brushstrokes to intricate details, our listings provide a visual journey into the heart of artistic expression. Experience a fusion of creativity and insight as you browse through dimensions, styles, and the soulful stories embedded in every piece."</p>    
    <br><button class="read"> <a href="/artworkListing">Read More</a></button>
</div>
</div>


<!-- Footer -->
<footer class="footer-section">
  <div class="container">
      <div class="footer-cta pt-5 pb-5" style="padding: 30px;">
          <div class="row"style="display: flex;">
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
          <div class="sa"style="display:flex;padding-left:20px;height:auto;width:90px;">
      <div class="fo"style="padding-right:40px;">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
