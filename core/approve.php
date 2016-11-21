<?php
include '../includes/connection.php';
$username = $_GET['username'];
$category = $_GET['category'];
$sql = "UPDATE userlogin SET category='$category', approve=1 WHERE userName='{$username}'";
mysql_query($sql);



?>