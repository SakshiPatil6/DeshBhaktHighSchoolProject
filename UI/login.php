<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<?php
require_once "config.php"; 
session_start();

// Check if the user is already logged in, if yes then redirect them to the home page
if(isset($_SESSION["login_student"]) && $_SESSION["login_student"] === true){
    header("location: index.php");
    exit;
}

// Include config file


// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, Email, Password FROM student WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["login_student"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid email or password.";
                        }
                    }
                } else{
                    // Email doesn't exist, display a generic error message
                    $login_err = "Invalid email or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    
}
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

  <title>DRK Highschool | Login</title>
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

  

  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    
      <div class="row align-items-center justify-content-center" style="padding-top:200px;">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Login</h1> 

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
  </div>
  
  </div> <!-- /.untree_co-hero -->




  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="#" class="form-box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="row">
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $email; ?>">
                <span><?php echo $email_err; ?></span>
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="password" name="password">
                <span><?php echo $password_err; ?></span>
              </div>

              <div class="col-12 mb-3">
                <label class="control control--checkbox">
                  <span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>

              <div class="col-12">
                <input type="submit" value="Login" class="btn btn-primary" name="login_student">
              </div>
              <p><?php echo $login_err; ?></p>
            </div>
          </form>
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
            <h3>Gallery</h3>
            <ul class="instafeed instagram-gallery list-unstyled">
              <li><a class="instagram-item" href="images/gal_1.jpg" data-fancybox="gal"><img src="images/gal_1.jpg"
                    alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_2.jpg" data-fancybox="gal"><img src="images/gal_2.jpg"
                    alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_3.jpg" data-fancybox="gal"><img src="images/gal_3.jpg"
                    alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_4.jpg" data-fancybox="gal"><img src="images/gal_4.jpg"
                    alt="" width="72" height="72"></a>
              </li>
              
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
            by <a href="#">Praramb</a> Developmet Cell<a href="#"></a>
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
