<?php 
 
include_once 'db.php';
 
if(isset($_POST['submit']))
{    
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_address = $_POST['user_address'];

    $sql = "UPDATE users SET `firstname`='$firstname', `lastname`='$lastname', `gender`='$gender', `email`='$email', `user_address`='$user_address' WHERE `id`=$id ";
    
    if (mysqli_query($conn, $sql)) {
    echo "Record has been updated added successfully !";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
else {
    echo "Oops something went wrong!";
}
?>