<?php

include_once 'db.php';

$host = "localhost";
$username = "root";
$password = "";
$dbname = "wt_lab";


if(isset($_POST['submit']))
{
    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    gender VARCHAR(5),
    email VARCHAR(50),
    phone INT(10) UNSIGNED,
    user_address VARCHAR(100)
    )";

    if (mysqli_query($conn, $sql)) {
      echo "Table created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
else {
    echo "Something went wrong.";
}
?>