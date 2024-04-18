// Navbar
(function($) { 
    $(function() { 
                   // Open and close nav 
                   $('#navbar-toggle').click(function() {
        $('nav ul').slideToggle();
      });
  
      // Hamburger toggle
      $('#navbar-toggle').on('click', function() {
        $(this).toggleClass('active');
      });
  
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.navbar-dropdown').slideToggle("slow");
  
        // Close dropdown when selecting another dropdown
        $('.navbar-dropdown').not($(this).siblings()).hide("slow");
        e.stopPropagation();
      });
  
      // Click outside the dropdown will remove the dropdown class
      $('html').click(function() {
        $('.navbar-dropdown').hide();
      });
    }); 
  })(jQuery);


//Carousel
$(document).ready(function() {
  let currentSlide = 0;
  const slides = $('.slide');

  function showSlide(index) {
    slides.removeClass('active page-turn');
    slides.eq(index).addClass('active');
    setTimeout(() => {
      slides.removeClass('page-turn');
    }, 1000); // Adjust the timeout to match the animation duration
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    slides.eq(currentSlide).addClass('page-turn');
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides.eq(currentSlide).addClass('page-turn');
    showSlide(currentSlide);
  }

  // Autoplay the slider
  setInterval(nextSlide, 5000); // Change 5000 to the desired interval in milliseconds

  // Show the initial slide
  showSlide(currentSlide);
});


// Blog Slider

