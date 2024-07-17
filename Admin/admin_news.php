<?php 
@include 'config.php';
$message = []; // Initialize message array

if(isset($_POST['add_news'])){
   $news_heading = mysqli_real_escape_string($link, $_POST['newsHeading']);
   $news_date = mysqli_real_escape_string($link, $_POST['newsDate']);
   $news_desc = mysqli_real_escape_string($link, $_POST['newsDesc']);
   $news_image = $_FILES["newsImage"]['name'];
   $news_image_tmp_name = $_FILES['newsImage']['tmp_name'];
   $news_image_folder = 'image/news/'.$news_image;

   $insert_query = mysqli_prepare($link, "INSERT INTO `news`( `heading`, `date`, `description`, `image`) VALUES (?, ?, ?, ?)");
   mysqli_stmt_bind_param($insert_query, "ssss", $news_heading, $news_date, $news_desc, $news_image);
   mysqli_stmt_execute($insert_query);

   if(mysqli_stmt_affected_rows($insert_query) > 0){
      move_uploaded_file($news_image_tmp_name, $news_image_folder);
      $message[] = 'News added successfully';
   }else{
      $message[] = 'Could not add the news';
   }
}
 
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

    <link rel="stylesheet" href="adminstyle.css">
    
</head>
<body>
  
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


<header class=header>
        <div class="flex">
            <a href="admin.php"class="logo">Desh Bhakt High School</a>
            <nav class="navbar">
                    <a href="admin_gallery.php">Add Gallery</a>
                    <a href="admin_news.php">Add News</a>
                    <a href="admin_achievements.php">Add Achievements</a>
                    <a href="admin_contact.php">Add Contacts</a>
                    <a href="admin_staff.php">Add Staff</a>
                    <a href="admin_feedback.php">Feedback</a>
                    <a href="../UI/index.php">Logout</a>
            </nav>
        </div>
    </header>

    <div class="containeer">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                    <h3>add a news</h3>
                    <input type="text" name="newsHeading" placeholder="enter the news heading" class="box" required>
                    <input type="date" name="newsDate" placeholder="enter the date" class="box" required>
                    <input type="text" name="newsDesc" placeholder="enter the description" class="box" required>
                    <input type="file" name="newsImage" min="0" accept="image/png,image/jpg,image/jpeg" class="box" required>
                    <input type="submit" value="add the news" name="add_news" class="btn">
            </form>
        </section>
        


</div>



        
    
    
</body>
</html>