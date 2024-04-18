<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<!---------- Navbar --------->
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

          <img src="https://media.istockphoto.com/id/1861091255/photo/contact-us-support-hotline-people-connect-user-man-use-a-smartphone-with-virtual-screen.jpg?s=612x612&w=0&k=20&c=FUTu0CKStwDDDr-YwTrvVYP4k58uqSQqk8OHyA-GB1Q="style="width: 1440px;height:550px;padding-top:7px;">

<!-- ContactUs -->

<h2 style="padding-top:40px;"><center>Connect with us, your creativity matters</center></h2>
<br><br>
<div class="con">
  <form action="" method="post">
      <div class="por">
          <div class="name-container">
              <input type="text" size=50 id="firstName" name="firstName" placeholder="First Name" required>
              <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
          </div>
          <input type="text" id="email" name="email" placeholder="Email Id" required><br><br>
          <textarea id="message" name="message" rows="7" cols="40" placeholder="Your message..." required></textarea><br><br>
      </div>
      <div class="button_con">
      <button type="submit" value="Send Message"><b>Send Message</b></button>
      </div>
  </div>
  </form>
</div>

<!-- FAQ -->
<h2 style="padding-top:60px;text-align: center;">Frequently Asked Questions</h2>
    <div class="faq">
        <div class="faq-q">
          <span>
            <b>How can I showcase my artwork on Artistry Atlas?</b>
          </span>
          <p>
            Create an account, complete your artist profile, and easily upload your artworks through the intuitive listing process. Engage with the community, utilize our private messaging system, and explore commissioned work opportunities.          </p>
        </div>
        <div class="faq-q">
          <span>
            <b>Can I connect with other artists on Artistry Atlas?</b>
          </span>
          <p>
            Absolutely! Connect with fellow artists by engaging in the community, exploring portfolios, and using our private messaging system for collaboration and inspiration. Artistry Atlas fosters a global network where artistic voices resonate.          </p>
        </div>
        <div class="faq-q">
          <span>
            <b>Is there a limit to the number of artworks I can upload?</b>
          </span>
          <p>
            No, there's no limit to your creativity! Artistry Atlas allows you to upload an unlimited number of artworks, providing a boundless canvas for you to showcase your diverse talents and creations.          </p>
        </div>
        <div class="faq-q">
          <span>
            <b>Can I sell my artwork on Artistry Atlas?</b>
          </span>
          <p>
            Yes, you can! Set your artwork prices, provide details, and enable the secure payment gateway to sell your creations directly on Artistry Atlas.          </p>
        </div>
        <div class="faq-q">
          <span>
            <b>Is there a cost associated with joining or using Artistry Atlas?</b>
          </span>
          <p>
            Artistry Atlas offers a free and accessible platform for both artists and art enthusiasts. There are no membership fees; simply sign up and start exploring or showcasing your art.          </p>
        </div>
      </div>
      <br><br>
<div class="still">
<h2>Still Have Questions?</h2><br>
<button>Contact Us</button>
</div><br><br>
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
      <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>