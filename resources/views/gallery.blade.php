<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel = "stylesheet" href = "{{ asset('css/gallery.css') }}" />  
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
     <!---------- NavBar ------------->
     <section class="navigation">
      <div class="nav-container">
        <div class="brand">
          <img src="Images/Logo.png" alt="Logo" class="logo" style="width:250px;height:80px;">

        </div>
        <nav>
          <!-- <div class="nav-mobile"><a id="navbar-toggle" href="#!"></a></div> -->
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
              <a href="#">JoinUs</a>
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
<!-- Hero Section -->
    <section class="hero">
        <div class="content">
          <h2>ART GALLERIES</h2>
          <p>Experience the limitless beauty of imagination and creativity, where our gallery's captivating creations not only exceed boundaries but also expand the horizons of inspiration for the soul.</p>
          </div>
        <div class="waves"></div>
      </section>
<!-- Galleries -->
    <h1>Gallery Showcase: Where Creativity Comes to Life</h1>
<div class="grid-container">
  <div>
    <img class='grid-item grid-item-1' src='https://imgs.search.brave.com/MZDW4ex0Xbgi0DC5HUMlEIcKv7-rAPTQtTvBqZw3j-g/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/cGVuYW5kYnJ1c2gu/b3JnL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDIyLzAxL3RpbWVs/aW5lLTE5MjMtb3Jp/Z2luYWwtZ2FsbGVy/eS5qcGVn' alt=''>
    <p>"I'm so happy today!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-2' src='https://plus.unsplash.com/premium_photo-1673514503544-1b8c10dd8019?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' alt=''>
    <p>"I see those nugs."</p>
  </div>
  <div>
    <img class='grid-item grid-item-3' src='https://i.pinimg.com/474x/0f/a9/b2/0fa9b2c2107e2348eef9c07b307d52c6.jpg' alt=''>
    <p>"I love you so much!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-4' src='https://i.pinimg.com/474x/3e/b6/df/3eb6df8576cd2d7d3f171a50d708e12c.jpg' alt=''>
    <p>"I'm the baby of the house!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-5' src='https://i.pinimg.com/474x/6f/a1/89/6fa189ba30d740e356a31509ab44ee27.jpg' alt=''>
    <p>"Are you gunna throw the ball?"</p>
  </div>
  <div>
    <img class='grid-item grid-item-6' src='https://img.freepik.com/premium-photo/painting-cabin-by-lake-with-mountain-background_579873-1046.jpg?size=626&ext=jpg&ga=GA1.1.733261187.1706255741&semt=sph' alt=''>
    <p>"C'mon friend!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-7' src='https://i.pinimg.com/474x/b2/d5/2e/b2d52ef87ee86d9582e046ef52a480ee.jpg' alt=''>
    <p>"A rose for mommy!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-8' src='https://i.pinimg.com/474x/32/ad/f5/32adf58e6527eadb92431f6c8f66030f.jpg' alt=''>
    <p>"You gunna finish that?"</p>
  </div>
  <div>
    <img class='grid-item grid-item-9' src='https://i.pinimg.com/474x/9c/d1/90/9cd19016daf38a86ae657818906246a2.jpg' alt=''>
    <p>"We can't afford a cat!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-10' src='https://i.pinimg.com/474x/41/18/85/4118852ac13df45675f5583322ff0cde.jpg' alt=''>
    <p>"Dis my fren!"</p>
  </div>

  <div>
    <img class='grid-item grid-item-1' src='https://imgs.search.brave.com/MZDW4ex0Xbgi0DC5HUMlEIcKv7-rAPTQtTvBqZw3j-g/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/cGVuYW5kYnJ1c2gu/b3JnL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDIyLzAxL3RpbWVs/aW5lLTE5MjMtb3Jp/Z2luYWwtZ2FsbGVy/eS5qcGVn' alt=''>
    <p>"I'm so happy today!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-2' src='https://plus.unsplash.com/premium_photo-1673514503544-1b8c10dd8019?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' alt=''>
    <p>"I see those nugs."</p>
  </div>
  <div>
    <img class='grid-item grid-item-3' src='https://i.pinimg.com/474x/0f/a9/b2/0fa9b2c2107e2348eef9c07b307d52c6.jpg' alt=''>
    <p>"I love you so much!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-4' src='https://i.pinimg.com/474x/3e/b6/df/3eb6df8576cd2d7d3f171a50d708e12c.jpg' alt=''>
    <p>"I'm the baby of the house!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-3' src='https://i.pinimg.com/474x/0f/a9/b2/0fa9b2c2107e2348eef9c07b307d52c6.jpg' alt=''>
    <p>"I love you so much!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-2' src='https://plus.unsplash.com/premium_photo-1673514503544-1b8c10dd8019?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' alt=''>
    <p>"I see those nugs."</p>
  </div>
  <div>
    <img class='grid-item grid-item-5' src='https://i.pinimg.com/474x/6f/a1/89/6fa189ba30d740e356a31509ab44ee27.jpg' alt=''>
    <p>"Are you gunna throw the ball?"</p>
  </div>
  <div>
    <img class='grid-item grid-item-6' src='https://img.freepik.com/premium-photo/painting-cabin-by-lake-with-mountain-background_579873-1046.jpg?size=626&ext=jpg&ga=GA1.1.733261187.1706255741&semt=sph' alt=''>
    <p>"C'mon friend!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-3' src='https://i.pinimg.com/474x/0f/a9/b2/0fa9b2c2107e2348eef9c07b307d52c6.jpg' alt=''>
    <p>"I love you so much!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-7' src='https://i.pinimg.com/474x/b2/d5/2e/b2d52ef87ee86d9582e046ef52a480ee.jpg' alt=''>
    <p>"A rose for mommy!"</p>
  </div>
  <div>
    <img class='grid-item grid-item-8' src='https://i.pinimg.com/474x/32/ad/f5/32adf58e6527eadb92431f6c8f66030f.jpg' alt=''>
    <p>"You gunna finish that?"</p>
  </div>
  <div>
    <img class='grid-item grid-item-9' src='https://i.pinimg.com/474x/9c/d1/90/9cd19016daf38a86ae657818906246a2.jpg' alt=''>
    <p>"We can't afford a cat!"</p>
  </div>
  
  <div>
    <img class='grid-item grid-item-10' src='https://i.pinimg.com/474x/41/18/85/4118852ac13df45675f5583322ff0cde.jpg' alt=''>
    <p>"Dis my fren!"</p>
  </div>
</div>

<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5" style="padding: 20px;padding-left: 30px;padding-top:10px;">
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
          <p style="margin-top:10px;font-family: serif; font-size: large;">Stay connected on social media for updates and more.</p><br>
          <div class="social-links" style="font-size: 20px;">
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

</body>
</html>