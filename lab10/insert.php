<?php

include_once 'db.php';

if(isset($_POST['submit']))
{    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_address = $_POST['user_address'];

    // $sql = "INSERT INTO users (`id`,`firstname`,`lastname`,`gender`,`email`,`phone`,`user_address`)
    // VALUES (NULL,'$firstname','$lastname','$gender','$email','$phone','$user_address')";
    
    $sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `email`, `phone`, `user_address`) 
    VALUES (NULL, '$firstname', '$lastname', '$gender', '$email', $phone, '$user_address')";


    if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
else {
    echo "Oops something went wrong!";
}
?>