<?php 
include_once 'db.php';
 
$sql = "SELECT * FROM users";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 
while($data = mysqli_fetch_array($query))
{
    echo "ID = ".$data['id']."<br>";
    echo "Name = ".$data['firstname']." ".$data['lastname']."<br>";
    echo "Gender = ".$data['gender']."<br>";
    echo "E-Mail = ".$data['email']."<br>";
    echo "Phone = ".$data['phone']."<br>";
    echo "Address = ".$data['user_address']."<br><hr>";
}