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

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


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

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <title>DRK Highschool | News</title>





  <style>
    /* Style the modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        overflow: auto;
    
    }

    /* Style the close button */
    .close {
        color: #fff;
        font-size: 50px;
        font-weight: bold;
        position: absolute;
        top: 15px;
        right: 35px;
        cursor: pointer;
    }

    /* Style the image inside the modal */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 800px;
        max-height: 80%;
        margin-top:50px;
    }
</style>

<script>
    // Function to open the modal
    function openModal(imagePath) {
        document.getElementById('modal-image').src = imagePath;
        document.getElementById('modal').style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }
</script>






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
            <li  class="active"><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
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




  <div class="untree_co-section bg-light" id="newsinfo">
    <div class="container">
      <div class="row align-items-stretch">


      <?php
      $image_base_path = "../Admin/image/news/";
  $select_news = mysqli_query($link, "SELECT * FROM `news` ORDER BY `id` DESC");
if(mysqli_num_rows($select_news) > 0){
    while($fetch_news = mysqli_fetch_assoc($select_news)){
      $image_path = $image_base_path . $fetch_news['image'];
        ?>
        <div class="col-lg-6 mb-4"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="<?php echo $image_path; ?>" alt="Image" onclick="openModal('<?php echo $image_path; ?>')">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#"><?php echo $fetch_news['heading']; ?></a></h2>
              <div class="meta "><span class="icon-calendar mr-2"></span><span><?php echo $fetch_news['date']; ?></span>  </div>
              <p><?php echo $fetch_news['description']; ?></p>
            </div>
          </div>
        </div>

        <?php
    }
}
?>

<!-- Modal -->
<div id="modal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modal-image">
</div>
        

      </div>

      <div class="row mt-5">
        <div class="col-12 text-center">
          <ul class="list-unstyled custom-pagination">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
          </ul>
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