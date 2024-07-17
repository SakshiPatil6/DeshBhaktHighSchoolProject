<?php
@include 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous"> -->

  <!-- </script> -->
  <title>DeshBhakt Ratnappa Kumbhar Highschool</title>
</head>
<style>
  @media (max-width: 991px) {
    .site-menu-toggle {
      display: block !important;
    }
  }
</style>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

          <?php
          $select_contact = mysqli_query($link, "SELECT * FROM `contact` ORDER BY id DESC
  LIMIT 1");
          if (mysqli_num_rows($select_contact) > 0) {
            while ($fetch_contact = mysqli_fetch_assoc($select_contact)) {
              ?>
              <div class="col-6 col-lg-9">
                <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span
                    class="d-none d-lg-inline-block"><?php echo $fetch_contact['contact']; ?></span></a>
                <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span
                    class="d-none d-lg-inline-block"><?php echo $fetch_contact['email']; ?></span></a>
              </div>
              <?php
            }
          }
          ?>


          <div class="col-6 col-lg-3 text-right">
            <a href="login.php" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="register.php" class="small">
              <span class="icon-person"></span>
              Register
            </a>
          </div>

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.php" class="logo menu-absolute m-0"><img src="./images/DeshBhakt.png" alt="logo"
              class="logoM"><span class="text-primary"></span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class="active"><a href="index.php">Home</a></li>

            <li><a href="staff.php">Our Staff</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
<<<<<<< HEAD
 <li><a href="contact.php">Contact</a></li>
=======

            <!-- <li><a href="achievements.php">Achievements</a></li> -->
            <li><a href="contact.php">Contact</a></li>
>>>>>>> 6e9d5230119b9f129cfeb3aeecd5e3c2828a9cf2
          </ul>

          <a href="register.php" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll
            Now</a>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/20220626_094437.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1 class="mb-4 heading text-white">
                    <span id="typed-text"></span>
                  </h1>
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      var typed = new Typed('#typed-text', {
                        strings: ['Deshbhakt Ratnappa Kumbhar Highschool'],
                        typeSpeed: 50,
                        backSpeed: 20,
                        startDelay: 500,
                        backDelay: 1500,
                        loop: false,
                      });
                    });
                  </script>
                  <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#info"
                      class="btn btn-secondary">Explore</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Add more swiper-slide divs for additional images -->
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/20220814_085709.jpg');">
      </div>
      <div class="swiper-slide untree_co-hero overlay" style="background-image: url('images/HERO_IMAGES/HERO-1.jpg');">
      </div>
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/IMG-20220506-WA0057.jpg');">
      </div>
      <div class="swiper-slide untree_co-hero overlay"
        style="background-image: url('images/HERO_IMAGES/IMG-20240413-WA0037.jpg');">
      </div>
    </div>
    <!-- Add Pagination if needed -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation if needed -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>


  <div class="services-section" id="info">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Deshbhakt Ratnappa Kumbhar
              Highschool</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">
            Welcome to Deshbhakt Ratnappa Kumbhar High School R K Nagar Pachgaon , that has been established not only to
            provide education but also to enable each student to emerge on the top his/her career. I strongly believe
            that true education teaches the valuable virtues of self-knowledge, self-control and self-confidence”.

          </p>

          <!-- <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Behind the word Mountains.</li>
            <li>Far far away Mountains.</li>
            <li>Large language Ocean.</li>
          </ul> -->

          <!-- <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p> -->

        </div>
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-4">
            <img src="../UI/images/school_gallary/DeshSchool.jpg" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
          <p>Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-music"></span>
            <h3>Music Class</h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-calculator-alt"></span>
            <h3>Math Class</h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>English Class</h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>Reading for Kids</h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-history"></span>
            <h3>History Class</h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-headphones"></span>
            <h3>Music</h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">

          <h3 class="line-bottom mb-4">What parent said about DRKH</h3>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;I would like to thank DRKH for providing many
                  different opportunities for my daughter to learn
                  and grow at every step. I would like to show my appreciation
                  to the teachers for their hard work and
                  support. The way her teachers have helped to develop her
                  personality, while at the same time
                  inculcating self-discipline and respect towards others, is
                  truly incredible. The way of teaching and
                  interaction in the school is also commendable. Thank you INS
                  for providing such an environment for the
                  children to grow in their own way.&rdquo;</p>
                <!-- <div class="author">
                  <img src="images/person_1.jpg" alt="Free template by TemplateUX">
                  <h3>John Doe</h3>
                  <p class="position">CEO, Founder</p>
                </div> -->
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;Deshbhakt Ratnappa Kumbhar Highschool is a wonderful
                  school to send my child to. They have been amazing in
                  everything I have needed assistance in. My daughter has
                  excelled at this school. The teachers care about the
                  children. The school community is rich with diversity and
                  the school works hard for their students. Even in pandemic
                  situation the teachers did their jobs with full efforts.
                  This school has helped my child to cope in many different
                  ways.&rdquo;</p>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;We feel so fortunate to have our son's teachers as
                  his mentors. He loves them and talks about
                  them often. He is learning so much and great full beyond
                  words. The way her teachers have helped to
                  develop her personality, while at the same time inculcating
                  self-discipline and respect towards
                  others, is truly incredible.&rdquo;</p>

              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section pt-0 bg-img overlay"
    style="background-image: url('../UI/images/SCHOOL+WEBSITE/20220812_142527.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Education for Tomorrow's Leaders</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains,
            far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
          <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
          <p data-aos="fade-up" data-aos-delay="100">We aspire to transform each student into a multifaceted
            personality. We also aspire & desire that each of our students should set an example for others to follow,
            by the virtue of his positive deeds & optimistic approach towards life</p>


          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="5003">0</span><span>+</span></span>
              <span class="caption-2">Passout Students</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="16">0</span><span></span></span>
              <span class="caption-2">Teaching Staff</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="8">0</span><span></span></span>
              <span class="caption-2">Non teaching Staff</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn btn-primary mr-1">Admission</a>
            <a href="#" class="btn btn-outline-primary">Learn More</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>
          <a href="../UI/images/SCHOOL+WEBSITE/20220626_093617.jpg" data-fancybox class="video-wrap">
            <span class=""><span class=""></span></span>
            <img src="../UI/images/SCHOOL+WEBSITE/20220626_093617.jpg" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">School News</h2>

        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="../UI/images/news/news/29-10-2023.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Women should take the lead in preserving society and culture: Vaidehi
                  Joshi</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 29, 2024</span>
                <span class="icon-person mr-2"></span>Admin
              </div>
              <p>Women have always played a significant role in preserving society and culture. Vaidehi Joshi emphasized
                this point at the "Abhiman Navadurga" event organized by the Youth Development Foundation.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="../UI/images/news/news/09-10-2023.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Deshbhakt Ratnappa Kumbhar Highschool Celebrates Maha Dhananjay!</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 08, 2024</span>
                <span class="icon-person mr-2"></span>Admin
              </div>
              <p>Deshbhakt Ratnappa Kumbhar Highschool organized the traditional Ganesh festival celebration.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->


  <div class="site-footer">

    <div class="container">

      <div class="row">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the
              blind texts.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->



        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>Deshbhakt Ratnappa Kumbhar Highschool, R. K.
              Nagar</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">9421175728</a></li>
              <li><a href="tel://11234567890">9421175728</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->


      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love
            by <a href="#">Praramb</a> Developmet Cell - DYPCET<a href="#"></a>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/custom.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        autoplay: {
          delay: 5000,
        },
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
      });

      var typed = new Typed('#typed-text', {
        strings: ['Deshbhakt Ratnappa Kumbhar Highschool'],
        typeSpeed: 50,
        backSpeed: 20,
        startDelay: 500,
        backDelay: 1500,
        loop: false,
      });
    });
  </script>

</body>

</html>