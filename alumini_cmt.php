<?php require_once("includes/connection.php"); ?>
<?php 
		$name = $_POST['textfield3'];
		$brth = $_POST['textfield34'];
		$Gender = $_POST['Gender'];
		$education = $_POST['education'];
		$phone = $_POST['phone'];
		$email = $_POST['textfield36'];
		$cmnt = $_POST['textarea'];

		$sql = "INSERT INTO comments (name,brth,sex,edu,pn_num,email,cmt,category)VALUES('$name','$brth','$Gender','$education','$phone','$email','$cmnt','alumini')";
	
		  mysql_query($sql);
                       header('Location:Alumini.php');
			
 ?>