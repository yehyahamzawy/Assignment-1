
<?php
$Connection  = new mysqli("localhost", "root", "","task");
$updateSQL = "DELETE  from user  WHERE ID = '".$_GET["userID"]."'";

mysqli_query($Connection, $updateSQL);
?>