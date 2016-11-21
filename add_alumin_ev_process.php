<?php
include "includes/connection.php";
$title = $_POST['title'];
$notice = $_POST['notice'];
$sql = "INSERT INTO notice (title,notice,file,category)VALUES('$title','$notice','$image_link','alumini')";
mysql_query($sql);
header('Location:alumin_ev.php');

?>