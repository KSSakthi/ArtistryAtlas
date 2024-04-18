<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commissioning System</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">
    
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #f0f0f0;
        padding: 20px;
        text-align: center;
    }
    .features {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }
    .feature {
        flex: 1;
        margin: 20px 20px 20px 20px;
        background-color: #f9f9f9;
        padding: 20px;
    }
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }
    .feature h2{
        text-align: center;
        padding-bottom: 20px;
        color: cadetblue;
        font-family: serif;
        font-size: 30px;
    }
    h1{
        text-align: center;
        color: rebeccapurple;
        font-family:math;
        font-size: 33px;
    }
    .feature li{
        font-family: emoji;
        font-size: 17px;
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
    <img src="https://images.pexels.com/photos/5717944/pexels-photo-5717944.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:1340px;height:500px;padding-top:7px;padding-left:100px;"><br><br>
    <header>
    <h1 style="color: brown;font-family:'Times New Roman', Times, serif">Commissioning System</h1>
    <p style="color:#615013;">Facilitating direct artist-buyer communication for personalized art commissions</p>
  </header><br>
  
  <div class="ab_art">
            <p style="text-align:center; padding:20px 90px 0px 90px ;">Artistry Atlas serves as a dynamic platform where artists and buyers seamlessly connect, fostering direct communication through a private messaging system. This innovative feature streamlines the commissioning process, allowing artists to showcase their unique styles and buyers to submit custom requests with ease. With Artistry Atlas, the traditional barriers between artist and buyer dissolve, paving the way for a personalized and efficient collaboration that ensures each artistic vision comes to life with precision and authenticity.</p><br>
            <p style="text-align:center;padding:20px 90px 0px 90px ;">At Artistry Atlas, artists have the opportunity to showcase their portfolios in an immersive and engaging manner, enabling buyers to explore a diverse range of artistic styles and techniques. Whether it's traditional oil paintings, digital illustrations, or mixed media collages, the platform celebrates the richness and diversity of artistic expression. Buyers can browse through artists' profiles, gaining insights into their backgrounds, inspirations, and previous works, empowering them to make informed decisions when commissioning a piece.</p><br>
            <p style="text-align:center; padding:20px 90px 0px 90px ;">Through the intuitive private messaging system, artists and buyers can communicate directly, discussing project details, timelines, and any specific preferences. This direct line of communication fosters a collaborative environment where ideas can flow freely, ensuring that the final artwork reflects the buyer's vision while staying true to the artist's creative expertise. With Artistry Atlas, the commissioning process becomes not only streamlined but also deeply personal, forging meaningful connections between artists and buyers in their shared pursuit of artistic excellence.</p>
<br>
        </div>
        <h1>Commissioning Process: Bridging Artists and Art Enthusiasts</h1>
  <section class="features">
    <div class="feature">
      <h2>For Artists</h2>
      <ul>
        <li>Showcase your portfolio on various platforms, making sure to highlight your unique style and previous commissioned works to attract potential clients.</li>
        <br><li>Respond promptly to inquiries and express enthusiasm for the opportunity to collaborate.</li>
        <br><li>Offer your professional advice and expertise while remaining open to the client's preferences and feedback.</li>
        <br><li>Clearly communicate your pricing structure, including any additional fees for revisions or materials, and ensure the client understands and agrees to the terms.</li>
        <br><li>Begin work once the initial deposit is received and provide updates on the progress as agreed.</li>
        <br><li>Keep the client informed of the artwork's progress, sharing sketches or work-in-progress images as appropriate.</li>
        <br><li>Ensure the artwork is securely packaged for shipping or ready for pickup according to the client's preferences.</li>
        <br><li>Express gratitude for the opportunity to create and invite the client to follow your artistic journey.</li>
    </ul>
    </div>
    <div class="feature">
      <h2>For Art Enthusiasts</h2>
      <ul>
        <li>Explore different artists' portfolios through online platforms, galleries, or social media to find an artist whose style resonates with your preferences.</li>
        <br><li> Reach out to the artist through their preferred contact method, whether it's via email, social media messaging, or a contact form on their website.</li>
        <br><li>Provide reference images or descriptions to help the artist understand your vision.</li>
        <br><li>Once the details are agreed upon, the artist may provide a proposal outlining the project scope, timeline, pricing, and terms.</li>
        <br><li>Make payments promptly according to the agreed schedule.</li>
        <br><li>Provide feedback and input during the creation process to ensure the artwork aligns with your vision.</li>
        <br><li>Once the artwork is completed to satisfaction, finalize any remaining payments and arrange for delivery or pickup.</li>
        <br><li>After the completion of the commission, provide feedback on the experience and, if desired, consider future collaborations.</li>
      </ul>
    </div>
  </section>

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