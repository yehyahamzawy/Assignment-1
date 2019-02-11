<?php

$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$Data_Base_Name = "task";

$Connection = new mysqli($Server_Name, $User_Name, $Password, $Data_Base_Name);

$SQL_Query = "Select * From user where ID=".$_GET["userID"];

$Result = mysqli_query($Connection, $SQL_Query);

$user = mysqli_fetch_array($Result);

echo '
<form action="updateUser.php?userID='.$_GET["userID"].'" method="POST">
First name: <br>
<input type="text" name="fname" value = "'.$user["fName"].'"><br>
Last name:<br>
<input type="text" name="lname" value = "'.$user["lName"].'"><br>
email: <br>
<input type="text" name="email" value = "'.$user["email"].'"><br>
Type:<br>
<select name="type">';

$typeQuery = "Select * From usertype";
$typeResult = mysqli_query($Connection, $typeQuery);
while($Row = mysqli_fetch_array($typeResult))
{
echo '<option value= '.$Row["typeID"].'>'.$Row["type"].'</option>';
}

echo '
</select>
<br><br><input type="submit" value="Submit">
</form>';





?>