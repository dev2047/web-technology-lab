<?php
$mysqli = new mysqli("localhost","root","","wt_lab");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT `lastname`, `email` FROM users ORDER BY lastname";
$result = $mysqli -> query($sql);

while($row = $result -> fetch_assoc())
{
  
  echo $row['lastname'] ."  -  ".$row['email'] ."<br>";
}


$result -> free_result();
$mysqli -> close();
?>