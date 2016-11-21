<?php
include "includes/connection.php";
$name = $_POST['name'];
$roll = $_POST['roll'];
$marks = $_POST['marks'];
$sql = "INSERT INTO result (name,roll,marks,category)VALUES('$name','$roll','$marks','nine')";
mysql_query($sql);
header('Location:rerult_nine.php');

?>