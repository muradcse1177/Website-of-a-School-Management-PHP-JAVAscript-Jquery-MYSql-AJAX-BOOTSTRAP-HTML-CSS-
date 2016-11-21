<?php
include "includes/connection.php";
$title = $_POST['title'];
$notice = $_POST['notice'];
$sql = "INSERT INTO notice (title,notice,file,category)VALUES('$title','$notice','$image_link','st_financial')";
mysql_query($sql);
header('Location:st_financial.php');

?>