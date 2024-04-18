<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MandalaArt</title>
    <link rel = "stylesheet" href = "{{ asset('css/home.css') }}" />   
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
    -webkit-text-size-adjust: 100%;
    -webkit-font-feature-settings: "kern" 1;
    -moz-font-feature-settings: "kern" 1;
    -o-font-feature-settings: "kern" 1;
    font-feature-settings: "kern" 1;
    font-kerning: normal;
}
main {
  position: relative;
}

.triangle {
  position: absolute;
  width: 0;
	height: 0;
	border-top: 28vh solid #ff4081;
	border-right: 40vw solid transparent;
  opacity: 0.90;
  z-index: -1;
  transition: all 0.3s cubic-bezier(.17,.67,.83,.67);
}
.triangle-2 {
  position: absolute;
  width: 0;
	height: 0;
	border-top: 25vh solid #cecdfe;
	border-right: 75vw solid transparent;
  opacity: 0.90;
  z-index: -2;
  transition: all 0.3s cubic-bezier(.17,.67,.83,.67);
}

.triangle-3 {
  position: absolute;
  display: block;
  right: 0;
  width: 0;
	height: 0;
	border-top: 25vh solid #4b007d;
	border-left: 75vw solid transparent;
  opacity: 0.90;
  z-index: -3;
  transition: all 0.3s cubic-bezier(.17,.67,.83,.67);
}

.container {
  position: relative;
  top: 20vh;
  padding: 50px 1em;
  max-width: 1000px;
  margin: 0 auto;
  z-index: 100;
}
  

@media only screen and (min-width: 768px) {
  
  .triangle {
    border-top: 120vh solid #ff4081;
    border-right: 35vw solid transparent;
  }
  .triangle-2 {
    border-top: 120vh solid #cecdfe;
    border-right: 40vw solid transparent;
  }
  .triangle-3 {
    display: none;
  }
  .container {
    top: 10vh;
  }
}


article {
  max-width: 700px;
  margin: 0 auto;
  z-index: 100;
}
article h1 {
  font-family: 'Merriweather';
  font-weight: 700;
  font-size: 3.5rem;
  color: #202020;
  margin-bottom: 0.25em;
  text-align: center;
}
article .metadata {
  margin-bottom: 1em;
}
article span {
  font-family: Merriweather;
  font-size: 1em;
  font-weight: 400;
  display: block;
  color: #828385;
  text-align: center;
  margin-bottom: 0.250em
}
article p {
  font-family: 'PT Sans';
  font-weight: 400;
  font-size: 1.150em;
  line-height: 1.4;
  color: #363636;
  margin-bottom: 1.1635em;
  letter-spacing: -0.0040em;
  padding: 0.50em;
}

@media only screen and (min-width: 768px) {
  article p {
    font-size: 1.30em;
  }
}
    </style>
</head>
<body>
    <!-- NavBar -->
    <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <img src="{{ asset('Images/Logo.png') }}" alt="Logo" class="logo" style="width:250px;height:72px;">

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
    <main>
        <div class="triangle"></div>
        <div class="triangle-2"></div>
        <div class="triangle-3"></div>
        <div class="container">
         
          <article>
          <h1>Mandala Art</h1>
          <!-- <div class="metadata">
            <span class="author">by John Doe</span>
            <span class="date">August 4, 2016</span>
          </div> -->
          <span>The mandala is not just a work of art; it is a spiritual journey, a meditation, and a path to enlightenment</span>
<p>Mandala art is a form of spiritual and symbolic expression that originated in ancient cultures, particularly in Hinduism, Buddhism, and Tibetan traditions. The word "mandala" is derived from the Sanskrit word for "circle," and these intricate designs are typically circular in nature, featuring geometric patterns, intricate details, and symmetrical compositions.</p>        
<p>In mandala art, the circle represents unity, wholeness, and the interconnectedness of all things. Each mandala is often divided into sections or layers, radiating outward from a central point, and adorned with geometric shapes, symbols, and motifs. These elements are rich in symbolism and can vary depending on cultural and religious influences.</p>
       <p>Mandalas are often used as tools for meditation, contemplation, and spiritual practice. The act of creating or coloring a mandala is believed to promote relaxation, focus, and inner harmony, as well as to facilitate self-discovery and personal growth. By engaging with the repetitive patterns and intricate details of the mandala, individuals can enter a state of mindfulness and connect with their innermost thoughts and emotions.</p> 
        <!-- <p>Paragraph</p>
            <p class="meh">meh</p> -->
        </article>
        </div>
        <p style="padding-left: 100px;padding-right: 100px;font-family: 'PT Sans';font-weight: 400;font-size: 1.150em;line-height: 1.4;">Moreover, mandala art is not limited to traditional circular designs; artists often incorporate their own interpretations and styles, resulting in a diverse range of mandala variations. Some artists experiment with different shapes, colors, and patterns, while others infuse mandalas with personal symbolism or cultural influences. This versatility allows mandala art to evolve and adapt to contemporary contexts while retaining its spiritual essence and universal appeal.</p><br>
       <p style="padding-left: 100px;padding-right: 100px;font-family: 'PT Sans';font-weight: 400;font-size: 1.150em;line-height: 1.4;">Furthermore, mandala art has gained popularity beyond spiritual and meditative practices, finding applications in therapy, mindfulness exercises, and stress relief techniques. Coloring mandalas has been shown to reduce anxiety, improve focus, and promote relaxation, making them a popular therapeutic tool for people of all ages.</p><br>
   <p style="padding-left: 100px;padding-right: 100px;font-family: 'PT Sans';font-weight: 400;font-size: 1.150em;line-height: 1.4;">In essence, mandala art transcends cultural boundaries and serves as a timeless symbol of interconnectedness, balance, and harmony. Whether created as a spiritual practice, a form of artistic expression, or a therapeutic activity, mandalas continue to inspire and uplift individuals around the world, offering a source of beauty, meaning, and introspection in an ever-changing world.</p><br>
   
    </main>
<br><br>
    <!-- Footer -->
<footer class="footer-section">
  <div class="container" style=" top: -9vh;"> 
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
<footer class="footer" style="max-height: 280px;">
  <div class="container" style="top: -20vh;">
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