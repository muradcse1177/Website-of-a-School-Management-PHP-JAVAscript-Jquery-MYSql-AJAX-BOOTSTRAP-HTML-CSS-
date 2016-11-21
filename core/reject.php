<?php
include '../includes/connection.php';
$username = $_GET['username'];
$sql = "DELETE FROM userlogin WHERE userName='$username'";
mysql_query($sql);

?>