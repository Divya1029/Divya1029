<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "first form";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo("Connection failed")."<br>";
}
else {
    echo("Connected")."<br>";
}

if (isset($_POST['submit'])) {    
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobilenumber = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $about = mysqli_real_escape_string($conn, $_POST["about"]);
    $experience = mysqli_real_escape_string($conn, $_POST["experience"]);

 // Prepare and execute the SQL query
    $sql = "INSERT INTO form_1 (`name`, `email`, `mobilenumber`, `age`, `about`, `experience`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
         mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $mobilenumber, $age, $about, $experience);
        if (mysqli_stmt_execute($stmt)) {
            echo "Data inserted successfully!"."<br>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
    echo "Error in preparing the statement: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>