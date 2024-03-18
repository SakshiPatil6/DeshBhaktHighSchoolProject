<?php
    $host='localhost';
    $database='deshbhakthighschool';
    $user='root';
    $password='';

    $link=mysqli_connect($host,$user,$password,$database);

    if($link==FALSE)
    {
        die("Error: Could not connect ".mysqli_connect_error());
    }
?>