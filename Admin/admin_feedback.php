<?php 
@include 'config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    
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
    <link rel="stylesheet" href="adminstyle.css">
    
</head>
<body>
  

<header class=header>
        <div class="flex">
            <a href="admin.php"class="logo">Desh Bhakt High School</a>
            <nav class="navbar">
                    <a href="admin_gallery.php">Add Gallery</a>
                    <a href="admin_news.php">Add News</a>
                   
                    <a href="admin_contact.php">Add Contacts</a>
                    <a href="admin_staff.php">Add Staff</a>
                    <a href="admin_feedback.php">Feedback</a>

                    <a href="../UI/index.php">Logout</a>

            </nav>
        </div>
    </header>
    <div class="untree_co-section bg-light" id="newsinfo">
    <div class="container">
      <div class="row align-items-stretch">


      <div class="containeer">
        <section>
      <?php
     
  $select_feedback = mysqli_query($link, "SELECT * FROM `feedback` ORDER BY `id` DESC");
if(mysqli_num_rows($select_feedback) > 0){
    while($fetch_feedback = mysqli_fetch_assoc($select_feedback)){
        ?>
        <div class="col-lg-6 mb-4"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <div class="media-h-body">
              <h3 class="mb-3"><?php echo $fetch_feedback['name']; ?></h3>
              <h5><div class="meta "><span class="icon-calendar mr-2"></span><span><?php echo $fetch_feedback['email']; ?></span>  </div></h5>
              <h5><p><?php echo $fetch_feedback['subject']; ?></p></h5>
              <h5><p><?php echo $fetch_feedback['message']; ?></p></h5>
            </div>
          </div>
        </div>
        <?php
    }
}
?>
</section>
</div>
</div>
</div>
</div>
</body>
</html>