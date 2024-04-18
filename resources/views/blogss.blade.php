<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blogs</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
  <link rel="icon" type="image/x-icon" href=".\images\l1.jpg ">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
  nav a:hover {
    background-color: #7a72eb;
  } 
  .container-fluid{
    background-color: #ffffff;
  }

		@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

  * {
    box-sizing: border-box;
  }
  .blog-card {
    display: flex;
    flex-direction: column;
    max-width: 1100px;
    margin: 1.5rem auto;
    box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.6%;
    background: #fff;
    line-height: 1.45;
    font-family: Poppins;
    border-radius: 15px;
    overflow: hidden;
    z-index: 0;

    .hover {
      color: #ffc400;
    } 
  }

  &:hover .photo {
    -webkit-transform: scale(1.15) rotate(2deg);
    transform: scale(1.15) rotate(2deg);
  }

  .meta {
    position: relative;
    z-index: 0;
    height: 200px;
  }

  .photo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    transition: -webkit-transform .2s;
    transition: transform .2s;
    transition: transform .2s, -webkit-transform .2s;
  }

  .description {
    padding: 1rem;
    background: #fff;
    position: relative;
    z-index: 1;

    .h1, h2 {
      font-family: Poppins;
    } 

    .h1 {
      line-height: 1;
      margin: 0;
      font-size: 1.7rem;
    } 

    .h2{
      font-size: 1rem;
      font-weight: 300;
      text-transform: uppercase;
      color: #a2a2a2;
      margin-top: 5px;
    }

    .read-more {
      text-align: right;
     
      .a{
        color: #ffc400;
        font-size: 16px;
        display: inline-block;
        position: relative;
        text-decoration: none;
        background: #fff7de;
        padding: 5px 15px;
        border-radius: 15px;

        :after {
          content: "\f054";
          font-family: FontAwesome;
          margin-left: -10px;
          opacity: 0;
          vertical-align: middle;
          transition: margin .3s, opacity .3s;
        }

        :hover:after {
          margin-left: 5px;
          opacity: 1;
        }
      }
    }
  }

  p {
    position: relative;
    margin: 1rem 0 0;
    color: #555;
    font-size: 13px;

    &:first-of-type {
      margin-top: 1.25rem;

      &:before {
        content: "";
        position: absolute;
        height: 3px;
        background: #ffc400;
        width: 75px;
        top: -1rem;
        border-radius: 3px;
      }
    }
  }

  hover .details {
    left: 0%;
  }


@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;

    .meta {
      flex-basis: 40%;
      height: auto;
    }

    .description {
      flex-basis: 60%;

      &:before {
        -webkit-transform: skewX(-3deg);
        transform: skewX(-3deg);
        content: "";
        background: #fff;
        width: 30px;
        position: absolute;
        left: -10px;
        top: 0;
        bottom: 0;
        z-index: -1;
      }
    }

    &.alt {
      flex-direction: row-reverse;

      .description:before {
        left: inherit;
        right: -10px;
        -webkit-transform: skew(3deg);
        transform: skew(3deg);
      }

      .details {
        padding-left: 25px;
      }
    }
  }
}
</style>
</head>
<body>

<!---------------------------------   NAVIGATION BAR   -------------------------------------------->

<!-- Navbar -->
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

          <img src="https://img.freepik.com/free-photo/full-shot-man-painting-indoors_23-2150182581.jpg?t=st=1709644750~exp=1709648350~hmac=cfac0e993d3060d041cf2359df493bd10ab3afb1e9c2177e53f45ee831a66588&w=1480"style="width:1440px;height:600px;padding-top:7px;"><br><br>



	<div class="blog-card">
		<div class="meta">
		  <div class="photo" style="background-image: url(https://img.freepik.com/free-photo/woman-going-through-notes-notebook_53876-30773.jpg?t=st=1709646410~exp=1709650010~hmac=29436070bed3ecacf2d54f1451605aad7dbe744a522078866909fcd76ed66580&w=1480)"></div>
		</div>
		<div class="description">
		  <h1>Exploring the Soul of Pencil Art: Finding Beauty in the Ordinary"</h1>
		  
		  <p> In a world filled with vibrant colors and flashy digital art, there's something undeniably captivating about the simplicity and rawness of pencil drawings. As we gaze upon the intricate strokes and delicate lines, we're transported into a realm where every shadow, every curve, tells a story of its own. </p>
		  <p class="read-more">
			<a href="/artist/blog1.html">Read More</a>
		  </p>
		</div>
	  </div>
	  <div class="blog-card alt">
		<div class="meta">
		  <div class="photo" style="background-image: url(https://img.freepik.com/free-vector/blogging-concept_23-2148003557.jpg?t=st=1709646465~exp=1709650065~hmac=80cdedce33ab427727d137a56ac617a809ad83dc5c082d7ea4d42932b8a11e05&w=1060)"></div>
		</div>
		<div class="description">
		  <h1>Unveiling the Art of Blogging: A Creative Journey of Expression</h1>
<p> As the digital landscape continues to evolve, blogging remains a timeless medium for self-expression, storytelling, and connection. The image above encapsulates the essence of blogging—a vibrant and dynamic platform where ideas come to life and voices find resonance.</p>
		  <p class="read-more">
			<a href="/article2.html">Read More</a>
		  </p>
		</div>
  
	  </div>

    <div class="blog-card">
      <div class="meta">
        <div class="photo" style="background-image: url(https://img.freepik.com/premium-photo/view-built-structure_1048944-27621252.jpg?w=1060)"></div>
      </div>
      <div class="description">
        <h1>Capturing Serenity: Embracing Tranquility Through Art</h1>
        <p>Art has a unique ability to transport us to different realms—to evoke emotions, stir memories, and provoke contemplation. In this artwork, we find ourselves drawn into a world of quietude and reflection, where time seems to stand still and worries melt away.</p>
        <p class="read-more">
        <a href="/article4.html">Read More</a>
        </p>
      </div>
      </div>
    <div class="blog-card alt">
      <div class="meta">
        <div class="photo" style="background-image: url(https://img.freepik.com/free-photo/artist-creating-hand-lettering-artwork_53876-105705.jpg?t=st=1709646596~exp=1709650196~hmac=75e0c7920c46a6b05b056406f80f34e113268060c7427d9a14651b82010b4ab1&w=1800)"></div>
      </div>
      <div class="description">
        <h1>The Art of Hand Lettering: A Journey of Creativity and Expression</h1>
<p>Hand lettering is more than just a skill—it's a form of self-expression, a way for artists to infuse their unique style and personality into every stroke of the pen. Whether it's elegant script or bold block letters, each piece of hand-lettered artwork carries with it a story, a message, a glimpse into the artist's soul.</p>
        <p class="read-more">
        <a href="/article3.html">Read More</a>
        </p>
      </div>
      </div>
      <div class="blog-card">
        <div class="meta">
          <div class="photo" style="background-image: url(https://img.freepik.com/free-vector/inspirational-quote-retro-style_23-2147508273.jpg?t=st=1709646630~exp=1709650230~hmac=ec6c605674e5c38948da73f456c65413402936fa087c5cc26a0466e1ea943010&w=1060)"></div>
        </div>
        <div class="description">
          <h1>Inspirational Quotes: Fueling Creativity in the Artistic Journey</h1>
          <p>In the realm of art, inspiration is the lifeblood that fuels creativity and innovation. Artists often draw inspiration from a myriad of sources—nature, personal experiences, emotions, and yes, even words. Inspirational quotes, with their concise yet profound messages, have the ability to ignite sparks of creativity and propel artists forward on their creative paths.</p>
          <p class="read-more">
          <a href="/article4.html">Read More</a>
          </p>
        </div>
        </div>
      
        <!----------------------------------------------------   FOOTER   ----------------------------------------------------------------->
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