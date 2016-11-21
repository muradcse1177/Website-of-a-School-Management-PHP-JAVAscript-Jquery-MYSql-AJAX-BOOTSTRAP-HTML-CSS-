<?php
include "includes/connection.php";
$name = $_POST['name'];
$post = $_POST['post'];
$sql = "INSERT INTO administration (name,post)VALUES('$name','$post')";
mysql_query($sql);
header('Location:administration.php');

?>