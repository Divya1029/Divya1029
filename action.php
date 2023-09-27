<?php
include "./db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    echo $name."<br>";
    $email = $_POST['email'];
    echo $email."<br>";
    $mobile=$_POST['mobile'];
    echo $mobile."<br>";
    $age=$_POST['age'];
    echo $age."<br>";
    $about=$_POST['about'];
    echo $about."<br>";
    $experience=$_POST['experience'];
    echo $experience."<br>";

}

?>