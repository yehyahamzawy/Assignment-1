<?php
$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$Data_Base_Name = "task";

$Connection = new mysqli($Server_Name, $User_Name, $Password, $Data_Base_Name);

$updateSQL = "UPDATE user SET fName= '".$_POST["fname"]."', lName = '".$_POST["lname"]."', email='".$_POST["email"]."', typeID='".$_POST["type"]."' WHERE ID = '".$_GET["userID"]."'";

mysqli_query($Connection, $updateSQL);


?>