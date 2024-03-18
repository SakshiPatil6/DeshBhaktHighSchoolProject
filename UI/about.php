<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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

  <meta name="description" content="" />
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

  <title>DRK Highschool | About</title>
</head>

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
        if(mysqli_num_rows($select_contact) > 0){
            while($fetch_contact = mysqli_fetch_assoc($select_contact)){
                ?>
                  <div class="col-6 col-lg-9">
                    <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span
                        class="d-none d-lg-inline-block"><?php echo $fetch_contact['contact'];?></span></a>
                    <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span
                        class="d-none d-lg-inline-block"><?php echo $fetch_contact['email'];?></span></a>
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
          <a href="index.php" class="logo menu-absolute m-0"><img src="./images/DeshBhakt.png" alt="logo" class="logoM"><span class="text-primary"></span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li><a href="index.php">Home</a></li>
        
            <li><a href="staff.php">Our Staff</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="active"><a href="about.php">About</a></li>
          
            <li><a href="achievements.php">Achievements</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

          <a href="register.php" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>


  <div class="untree_co-hero overlay" style="background-image: url('images/img-school-1-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">About Us</h1>
              <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                <p>Welcome to Secondary School, a co-educational institution that provides quality education to
                  students from grades
                  6 to 10. We are located in the heart of karvir, Maharashtra, India, and we have a best campus with
                  Good facilities
                  and education.</p>

                  <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#aboutinfo" class="btn btn-secondary">Explore</a></p>

              </div>

              <!-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p> -->

            </div>
          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->




  <div class="services-section" id="aboutinfo">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Chairman</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">Mr. Rajesh Sharma, a renowned educationist, who
            has been helping in promoting quality education
            and social service in the region.</p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Providing quality education.</li>
            <li>Social contributor.</li>
            <li>Man behind organiztion.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img
              src="https://st.adda247.com/https://wpassets.adda247.com/wp-content/uploads/multisite/sites/5/2022/02/16072208/IAS-Vineet-Joshi-Know-about-IAS-Vineet-Joshi-who-once.jpeg"
              alt="Image" class="img-fluid img-size">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>


  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Haed Of School</h2>
          <p>Welcome to Secondary School, where we aim to provide quality education to our students and prepare
            them for the
            challenges and opportunities of the 21st century, the head of school, and we are
            delighted to lead
            this wonderful school community.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img
                src="https://th.bing.com/th/id/OIP.Mr8emaqK_6VcKG81Ng7JPQAAAA?w=308&h=180&c=7&r=0&o=5&pid=1.7"
                alt="Image" class="img-fluid staff-img"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mrs.Arati Magdum</h3>
              <span class="d-block position mb-4">Principle</span>
              <p class="mb-4">
                Welcome to Secondary School, a co-educational institution that provides quality education to
                students from grades
                6 to 10. I am Mrs. Rekha Joshi, the principal of the school, and I am honored to serve this wonderful
                school community.

                I have been working in the field of education for over 25 years, as a teacher, coordinator, and
                administrator. I have a
                master's degree in Education from Mumbai University, and I have also completed several professional
                development courses
                and workshops on various aspects of school leadership and management. I have been the principal of
                Karvir Secondary
                School since 2019, and I have been working closely with the board of directors, the staff, the parents,
                and the students
                to ensure the smooth and successful functioning of the school.

              </p>
              <!-- <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="staff text-center">
            <div class="mb-4"><img
                src="https://th.bing.com/th/id/OIP.JK7_s12IJGwAdXgvtd33rAHaEK?w=265&h=180&c=7&r=0&o=5&pid=1.7"
                alt="Image" class="img-fluid staff-img"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mr.Suraj Patil</h3>
              <span class="d-block position mb-4">Vice Principle</span>
              <p class="mb-4">Vice Principle

                Vice Principal

                Welcome to Karvir Secondary School, a co-educational institution that provides quality education to
                students from grades
                6 to 10. I am Mr. Ravi Kumar, the vice principal of the school, and I am delighted to be a part of this
                wonderful school
                community.

                I have been working in the field of education for over 20 years, as a teacher, coordinator, and
                administrator. I have a
                master's degree in Education from Pune University, and I have also completed several professional
                development courses
                and workshops on various aspects of school leadership and management. I have been the vice principal of
                Karvir Secondary
                School since 2020, and I have been assisting the principal in the overall administration and management
                of the school.


              </p>
              <!-- <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div> <!-- /.untree_co-section -->



  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-music"></span>
            <h3>Music Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-calculator-alt"></span>
            <h3>Math Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>English Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>


        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>Reading for Kids</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-history"></span>
            <h3>History Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-headphones"></span>
            <h3>Music</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->




  <div class="untree_co-section">


    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
          <img src="images/img-school-5-min.jpg" alt="image" class="img-fluid">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4">Why Choose Us</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. </p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">Good Teachers and Staffs</button>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">We Value Good Characters</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                        skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her
                        own road, the Line Lane.</p>
                      <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->

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
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
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
            <address>Deshbhakt Ratnappa Kumbhar Highschool, R. K. Nagar</address>
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
  </div>  <!-- /.site-footer -->

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

</body>

</html>
