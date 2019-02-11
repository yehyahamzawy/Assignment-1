<?php 

$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$Data_Base_Name = "task";

$Connection = new mysqli($Server_Name, $User_Name, $Password, $Data_Base_Name);

$fname= $_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$type=$_POST['type'];
$SQL_Query = "INSERT INTO user (fname,lname,email,typeID)
VALUES ('$fname','$lname','$email','$type')";
// $Result = mysqli_query($Connection, $SQL_Query);

if (!mysqli_query($Connection, $SQL_Query))
  {
  echo("Error description: " . mysqli_error($Connection));
  
  }else{
  	echo "RECORD ADDED SUCCESSFULLY!";
  }





 ?>
