<?php
include "includes/connection.php";
$topics = $_POST['topics'];
$income = $_POST['income'];
$expence = $_POST['expence'];
$sql = "INSERT INTO financial (topics,income,expence)VALUES('$topics','$income','$expence')";
mysql_query($sql);
header('Location:financial.php');

?>