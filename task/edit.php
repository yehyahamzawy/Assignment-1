<?php
$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$Data_Base_Name = "task";

$Connection = new mysqli($Server_Name, $User_Name, $Password, $Data_Base_Name);



$SQL_Query = "Select * From user ";

$Result = mysqli_query($Connection, $SQL_Query);

while($Row = mysqli_fetch_array($Result))
{
    echo "Name: ".$Row["fName"]." ".$Row["lName"]."<br> ID: ".$Row["ID"]."<br> email: ".$Row["email"]."<br>";
   
    $typeQuery = "Select * From usertype where typeID = ".$Row["typeID"];
    $typeResult = mysqli_query($Connection, $typeQuery);
    $type = mysqli_fetch_array($typeResult);

    $typeLQuery = "Select * From usertypelinks where connectionID = ".$type["connectionID"];
    $typeLResult = mysqli_query($Connection, $typeLQuery);
    $typeL = mysqli_fetch_array($typeLResult);

    $linkQuery = "Select * From links where linkID = ".$typeL["linkID"];
    $linkResult = mysqli_query($Connection, $linkQuery);
    $link = mysqli_fetch_array($linkResult);

    echo "Type: ".$type["type"]."<br>Link: ".$link["link"]."<br>";

    echo "<a href = 'editUser.php?userID=".$Row["ID"]."'>edit user above?</a><br><br>";
    echo "<a href = 'delete.php?userID=".$Row["ID"]."'>delete user above?</a><br><br>";
}
?>