<?php
@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_teacher'])) {
    $teacher_name = mysqli_real_escape_string($link, $_POST['teacherName']);
    $teacher_position = mysqli_real_escape_string($link, $_POST['teacherPosition']);
    $teacher_bio = mysqli_real_escape_string($link, $_POST['teacherBio']);
    $teacher_type = isset($_POST['teacherType']) ? $_POST['teacherType'] : '';
    $teacher_image = $_FILES["teacherImage"]['name'];
    $teacher_image_tmp_name = $_FILES['teacherImage']['tmp_name'];
    $teacher_image_folder = '../UI/images/TEACHING/' . basename($teacher_image);
    
    // Avoid file name conflicts
    $teacher_image_folder = '../UI/images/TEACHING/' . time() . '_' . basename($teacher_image);

    // Check which type of teacher is being added
    if ($teacher_type == 'Teaching') {
        $insert_query = mysqli_prepare($link, "INSERT INTO teaching_staff (name, position, qualification, image_url) VALUES (?, ?, ?, ?)");
    } elseif ($teacher_type == 'Non-Teaching') {
        $insert_query = mysqli_prepare($link, "INSERT INTO non_teaching_staff (name, position, qualification, image_url) VALUES (?, ?, ?, ?)");
    } else {
        $message[] = 'Error: Invalid teacher type selected.';
    }

    // Execute the insert query if it's defined
    if (isset($insert_query)) {
        mysqli_stmt_bind_param($insert_query, "ssss", $teacher_name, $teacher_position, $teacher_bio, $teacher_image_folder);
        mysqli_stmt_execute($insert_query);

        // Check if insertion was successful
        if (mysqli_stmt_affected_rows($insert_query) > 0) {
            // Move uploaded image to desired folder
            if (move_uploaded_file($teacher_image_tmp_name, $teacher_image_folder)) {
                $message[] = 'Teacher added successfully';
            } else {
                $message[] = 'Failed to upload the image';
            }
        } else {
            $message[] = 'Could not add the teacher';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>

<?php
if (!empty($message)) {
    foreach ($message as $msg) {
        echo '<div class="message"><span>' . htmlspecialchars($msg) . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    }
}
?>

<<<<<<< HEAD
<header class="header">
    <div class="flex">
        <a href="admin.php" class="logo">Desh Bhakt High School</a>
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
=======
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
>>>>>>> 6e9d5230119b9f129cfeb3aeecd5e3c2828a9cf2

<div class="container">
    <section>
        <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>Add Teacher</h3>
            <input type="text" name="teacherName" placeholder="Enter teacher's name" class="box" required>
            <input type="text" name="teacherPosition" placeholder="Enter teacher's position" class="box" required>
            <input name="teacherBio" placeholder="Enter teacher's qualification" class="box" required></input>
            <br></br>
            <label for="teaching_staff" class="box">Teaching Staff
            <input type="radio" id="teaching_staff" name="teacherType" value="Teaching"  required></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="non_teaching_staff" class="box radio2">Non-Teaching Staff
            <input type="radio" id="non_teaching_staff" name="teacherType" value="Non-Teaching" required></label>

            <br><br/>
            <input type="file" name="teacherImage" accept="image/png,image/jpg,image/jpeg" class="box" required>
            <input type="submit" value="Add Teacher" name="add_teacher" class="btn">
        </form>
    </section>
</div>

</body>
</html>
