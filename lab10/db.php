<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "wt_lab";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
    else
    {
        echo"Connected Successfully!<br><br>";
    }
?>