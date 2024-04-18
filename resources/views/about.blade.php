<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel = "stylesheet" href = "{{ asset('css/home.css') }}" />   
    <link rel = "stylesheet" href = "{{ asset('css/about.css') }}" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
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
      <img src="https://images.pexels.com/photos/374054/pexels-photo-374054.jpeg?auto=compress&cs=tinysrgb&w=800"style="width:1440px;height:600px;padding-top:7px;"><br><br>
      <div>
        <h2 style="font-style:Inknut Antiqua;color:#941C1C;text-align: center;">ABOUT ARTISTIC ATLAS</h2><br><br>
      <div class="ab_art">
        <p style="text-align:center">Welcome to Artistry Atlas, an online sanctuary for art aficionados and creators alike! At Artistry Atlas, we believe in fostering a <br>vibrant community where artistic expression knows no bounds. Our platform serves as a dynamic gallery, showcasing an array of <br>genres, from mesmerizing Vector art to intricate Mandala creations and everything in between. Dive into the diverse world of visual <br>arts, explore captivating artworks, and engage with a community that celebrates creativity. Whether you're a passionate art <br>enthusiast or a talented artist seeking recognition, Artistry Atlas is your canvas for connection, inspiration, and the boundless <br>exploration of the artistic landscape.</p><br>
      <p style="text-align:center; padding-bottom:0px;">At the heart of Artistry Atlas is a commitment to empowering artists and art lovers. With features like private messaging for <br>seamless communication, a secure commissioning system, and a thoughtfully curated blog section, we strive to create an inclusive <br>space where artists can thrive and users can discover, appreciate, and even acquire unique artworks. Join us on this artistic journey,<br> where every stroke, pixel, and concept finds its place in the rich tapestry of Artistry Atlas. Together, let's redefine the way we <br>experience and share the beauty of visual art.</p>
      </div></div><br>
      <br><div class="line"></div><br><br><br>
      <h2 style="text-align: center;">COLLABORATIVE CANVAS</h2>
      <div class="can">
        <div class="can-ti"> 
            <img src="Images/CC.jpeg">
        </div>

        <div class="can-des">
            <p>
              Artistry Atlas goes beyond a gallery, evolving into a thriving community where artists collaborate, share insights, and redefine creative boundaries. More than a platform, it's a living support system, uniting like-minded individuals who recognize art's power to inspire and unify. Here, individual expressions blend into a collective symphony, forming connections beyond virtual borders. Join us in this dynamic tapestry, where artists contribute to a shared narrative, fostering connections that resonate far beyond the digital canvas.</p>
        </div>
    </div>
    <div class="vis">
      <div class="vis_mis">
      <h2 style="padding-bottom: 30px;color: rgb(5, 11, 71);">VISION</h2>
      <p>At Artistry Atlas, our vision is to create a global haven where artistic expression flourishes, transcending boundaries and connecting hearts through the universal language of art. 
        We envision a platform that inspires and empowers artists, providing them with the tools to showcase their creativity and fostering a community where art enthusiasts discover, appreciate, and engage with the diverse tapestry of visual arts. 
        Through Artistry Atlas, we strive to redefine the way the world experiences and values the profound impact of art, making it an accessible and integral part of the human experience.</p>
      </div>
      <div class="vis_mis">
        <h2 style="padding-bottom: 30px;color: rgb(5,11, 71);">MISSION</h2>
          <p>Artistry Atlas is dedicated to creating a dynamic online space for artists and art lovers. Our mission is to curate a diverse gallery, facilitate connections between artists and their audience, and empower creators through insightful content and a secure commissioning system. We aspire to make art more accessible and foster a global community where creativity flourishes and artistic voices resonate universally. Join us in this transformative journey of celebrating and connecting through the power of art, as we cultivate an inclusive platform that embraces the richness of diverse artistic expressions.</p>
      </div>
    </div>
  
    <br><br>
      <h2 style="text-align: center;">CULTIVATING ARTISTIC EMPOWERMENT</h2>
      <div class="can">
        <div class="can-des">
          <p>Artistry Atlas is a sanctuary committed to cultivating artistic empowerment.<br>Here, creativity is not just encouraged; it is fueled, nurtured, and celebrated.<br> We provide a unique platform where artists discover tools and resources tailored <br>to elevate their craft, expand their audience, and transform their passion into a sustainable journey. From showcasing portfolios to fostering collaborations, Artistry Atlas is more than a virtual gallery - it's a dynamic space dedicated to empowering artists at every stage of their creative exploration.</p>
      </div>
        <div class="can-ti1"> 
            <img src="Images/CC.jpeg">
        </div>
    </div><br><br>

    <div class="fut-main">
      <div class="fut">
      <h2>FUTURE VISION</h2><br><br>
    </div>
    <div class="fut-des">
      <p>Embark on an exciting journey with Artistry Atlas as we set our sights on transforming our platform into a truly global epicenter for artistic innovation. Our future vision encompasses a dynamic expansion that goes beyond geographical boundaries, fostering a worldwide community of creators and enthusiasts. Anticipate thrilling developments, meaningful partnerships, and enhanced features that will elevate Artistry Atlas into a cutting-edge space, inspiring and connecting the global creative community.
Stay tuned for the unveiling of initiatives that will redefine the way artists showcase their work, collaborate, and engage with each other. Artistry Atlas is poised to become more than just a platform; it will be a dynamic space that adapts to the evolving needs of artists and enthusiasts alike. We invite you to be an integral part of this transformative journey, contributing your ideas, perspectives, and creativity as we collectively shape the future of art appreciation and expression.</p>
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
  <script src="{{ asset('js/home.js') }}"></script>
    </body>
</html>