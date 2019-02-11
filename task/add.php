<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="added.php" method="POST" >
	Firstname<input type="text" name="fname">
	Lastname<input type="text" name="lname">
	Email<input type="text" name="email">
	<select name="type">
		<?php
		$Server_Name = "localhost";
		$User_Name = "root";
		$Password = "";
		$Data_Base_Name = "task";
		
		$Connection = new mysqli($Server_Name, $User_Name, $Password, $Data_Base_Name);
		$typeQuery = "Select * From usertype";
		$typeResult = mysqli_query($Connection, $typeQuery);
		while($Row = mysqli_fetch_array($typeResult))
		{
		echo '<option value= '.$Row["typeID"].'>'.$Row["type"].'</option>';
		}
		?>
	</select>
	<input type="submit" >
	</form>
</body>

</html>