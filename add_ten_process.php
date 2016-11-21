<?php
include "includes/connection.php";
$name = $_POST['name'];
$roll = $_POST['roll'];
$Father = $_POST['Father'];
$Mother = $_POST['Mother'];
$village = $_POST['village'];
$post = $_POST['post'];
$sql = "INSERT INTO student (name,roll,Father,Mother,village,post,category)VALUES('$name','$roll','$Father','$Mother','$village','$post','ten')";
mysql_query($sql);
header('Location:ten.php');

?>