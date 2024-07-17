
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

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
                  <p>देशभक्त रत्नाप्पा कुंभार हायस्कूल आर.के. नगर पाचगावमध्ये आपले स्वागत आहे, ज्याची स्थापना केवळ शिक्षण प्रदान करण्यासाठीच नाही तर प्रत्येक विद्यार्थ्याला त्याच्या/तिच्या करिअरमध्ये शीर्षस्थानी पोहोचण्यासाठी सक्षम करण्यासाठी केली गेली आहे. मी प्रामाणिकपणे मानतो की खरे शिक्षण आत्मज्ञान, आत्मनियंत्रण आणि आत्मविश्वास या मौल्यवान गुणांचा शिकवण देते.</p>
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




  <div class="services-section" id="aboutinfo">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">President</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">देशभक्त रत्नाप्पा कुंभार हायस्कूल आर के नगर पाचगावमध्ये आपले स्वागत आहे, ज्याची स्थापना केवळ शिक्षण देण्यासाठीच नाही तर प्रत्येक विद्यार्थ्याला त्याच्या/तिच्या करिअरमध्ये सर्वोच्च स्थानावर येण्यासाठी सक्षम करण्यासाठी करण्यात आली आहे. माझा ठाम विश्वास आहे की खरे शिक्षण आत्म-ज्ञान, आत्म-नियंत्रण आणि आत्मविश्वासाचे मौल्यवान गुण शिकवते.”
मला असे वाटते की संस्था एकट्याने किंवा कोणत्याही भक्ती किंवा मार्गदर्शनाशिवाय निर्माण होऊ शकत नाही. आदरणीय अधिकाऱ्यांच्या नेतृत्वाखालील ‘घाळी परिवारा’च्या सांघिक कार्यामुळेच हे शक्य झाले आहे, असे मला म्हणायचे आहे.
आम्ही विद्यमान शाळा नवीन आवश्यकतांनुसार श्रेणीसुधारित करण्याची योजना आखत आहोत जेणेकरून ती एक म्हणून उदयास येईल आदर्श संस्था. आमच्या समाजातील बौद्धिक आणि सुशिक्षित वर्गाच्या बरोबरीने आणण्यासाठी आम्ही सर्वांच्या कल्याणासाठी आणि उत्तम शिक्षणासाठी पूर्णपणे समर्पित आहोत.
आम्ही मुलांच्या विकासाच्या सर्व पैलूंचा विचार करत आहोत आणि मुलांना जीवनातील आव्हाने पेलण्यास सक्षम करण्यासाठी सर्वतोपरी प्रयत्न केले आहेत. एवढेच नाही तर आम्ही मुलांना त्यांचे चारित्र्य घडवण्यासाठी आणि नैतिक शिक्षणासाठी मदत करतो.

</p>

          <!-- <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Providing quality education.</li>
            <li>Social contributor.</li>
            <li>Man behind organiztion.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p> -->

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
          <h2 class="line-bottom text-center mb-4">Head Of School</h2>
          <p>Welcome to Deshbhakt Ratnappa Kumbhar High School R K Nagar Pachgaon , that has been established not only to provide education but also to enable each student to emerge on the top his/her career. I strongly believe that true education teaches the valuable virtues of self-knowledge, self-control and self-confidence”.</p>
        </div>
      </div>
      <div class="row">
       
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="staff text-center">
            <div class="mb-4"><img
            src="../UI/images/VICE PRESIDENT/VICE PRESIDENT.jpeg"

                alt="Image" class="img-fluid staff-img"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mr.Suraj Patil</h3>
              <span class="d-block position mb-4">Vice-President</span>
              <p class="mb-4">
              आमचे उद्दिष्ट केवळ चांगले शैक्षणिक शिक्षण देणे हे नाही तर ते मूल्यावर आधारित आहे. जग हे खूप स्पर्धात्मक ठिकाण बनले आहे परंतु आमचे उद्दिष्ट विद्यार्थ्यांना केवळ इतरांशी स्पर्धा करण्यासाठी तयार करणे नाही तर प्रथम स्वतःला शोधणे हे आहे.


भारतीय तत्त्वज्ञानानुसार, एखाद्या व्यक्तीला स्वतःबद्दल जितके अधिक माहिती असेल तितकी ती इतरांशी स्पर्धा करू शकेल. आम्ही शारीरिक आणि मानसिक कौशल्यांच्या विकासावर, एकाग्रतेची शक्ती वाढवण्यावर भरीव ताण देतो. उद्याच्या जगाच्या अपरिहार्य दबावांना तोंड देण्यासाठी मजबूत पात्रांच्या उभारणीवर भर दिला जातो. आम्ही नेहमीच उच्च ध्येय ठेवले आहे आणि कोणतेही प्रयत्न न करता आमचे ध्येय साध्य केले आहे. आमच्या अत्यंत प्रतिष्ठित संस्थेने आधीच पालक समुदायामध्ये विश्वास निर्माण केला आहे.

              </p>
              <!-- <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img
            src="../UI/images/principal/RAJAGONDA BABAGONDA PATIL.jpeg"
                alt="Image" class="img-fluid staff-img"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mr.Rajagonda Patil
              </h3>
              <span class="d-block position mb-4">Principle</span>
              <p class="mb-4">
              मी तुमचे आणि तुमच्या कुटुंबाचे हार्दिक स्वागत करतो. या अद्भुत शाळेचे प्राचार्य असल्याचा मला खूप अभिमान आहे. आमचे विद्यार्थी, आमचे कर्मचारी आणि आमच्या कुटुंबियांसोबत आमच्या शाळेला सर्वोत्तम बनवण्यासाठी काम करणे हा माझ्यासाठी विशेषाधिकार आहे. आमचे ध्येय साध्य करण्यासाठी आम्हाला एकत्र काम करण्यास सक्षम करण्यासाठी आमच्या शाळेच्या समुदायाचे नेतृत्व करणे हे माझे ध्येय आहे.
सकारात्मक नातेसंबंधांवर आधारित एक सुरक्षित, पालनपोषण करणारे परंतु आव्हानात्मक वातावरण तयार करणे, संपूर्ण विद्यार्थ्याचा - भावनिक, सामाजिक आणि शैक्षणिकदृष्ट्या विकास करणे हे आमचे ध्येय आहे. आम्ही आमच्या प्रत्येक विद्यार्थ्याची काळजी घेतो आणि त्यांचे कौतुक करतो की ते अद्वितीय व्यक्ती आहेत, प्रत्येकाची वेगळी शिक्षण शैली आहे.
आमची इच्छा आहे की आमच्या प्रत्येक विद्यार्थ्याने आदर, सहकार्य, चिकाटी या मूल्यांसह शाळा सोडावी आणि ते करत असलेल्या सर्व गोष्टींवर आधारित उत्कृष्टतेसाठी प्रयत्नशील राहावे.
आमचे विद्यार्थी त्यांच्या स्वतःच्या वर्तनासाठी आणि त्यांनी केलेल्या निवडींसाठी जबाबदारी विकसित करतात आणि त्यांच्या समवयस्कांना ते करण्यास मदत करण्याची सांप्रदायिक जबाबदारी देखील विकसित करतात. आमचे विद्यार्थी स्वाभिमान आणि वैयक्तिक अपेक्षांमध्ये मजबूत होतात आणि निरोगी आणि आदरयुक्त सहिष्णुता विकसित करतात.

              </p>
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
          <h2 class="line-bottom text-center mb-4">Vision</h2>
          <p>आम्ही प्रत्येक विद्यार्थ्याला बहुआयामी व्यक्तिमत्त्वात
रूपांतरित करण्याची आकांक्षा बाळगतो. आपल्या
प्रत्येक विद्यार्थ्याने त्याच्या सकारात्मक कृत्यांमुळे
आणि जीवनाप्रती आशावादी दृष्टीकोन यांद्वारे
इतरांसमोर एक आदर्श निर्माण करावा अशी आमची
इच्छा आणि इच्छा आहे.</p>
        </div>
      </div>
    </div> <!-- /.container -->



    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Our Objectives </h2>
          <p>
          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>जिज्ञासू मन विकसित करण्यासाठी आणि खरी क्षमता शोधण्यासाठी उत्तेजक वातावरण प्रदान करणे.</li>
            <li> विद्यार्थ्यांना पर्यावरणाप्रती सामाजिक जबाबदारी आणि जबाबदारीची भावना विकसित करण्यास प्रोत्साहित करणे.</li>
            <li>चांगले शारीरिक आणि मानसिक आरोग्य राखण्यासाठी जागरूकता निर्माण करणे.</li>
            <li> नवनवीन पद्धती आणि शिक्षण तंत्रज्ञानाच्या माध्यमातून शिकवण्याची आणि शिकण्याची गुणवत्ता वाढवणे.</li>
            <li>प्रत्येक व्यक्तीमध्ये हिंमत आणि लवचिकता वाढण्यास मदत करणे.</li>
          </ul>  
          
</p>
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
            <p>We aspire to transform each student into a
multifaceted personality. We also aspire &amp;
desire that each of our students should set an
example for others to follow, by the virtue of
his positive deeds &amp; optimistic approach
towards life</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

       
        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>Deshbhakt Ratnappa Kumbhar Highschool, R. K. Nagar</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">+91-9421175728</a></li>
              <li><a href="tel://11234567890">+91-9421175728</a></li>
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