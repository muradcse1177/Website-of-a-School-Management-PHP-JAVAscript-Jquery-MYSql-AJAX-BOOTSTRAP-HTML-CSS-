<?php require_once("includes/connection.php"); ?>
<?php 
		$name = $_POST['textfield3'];
		$st_name = $_POST['textfield34'];
		$Gender = $_POST['Gender'];
		$class = $_POST['education'];
		$phone = $_POST['phone'];
		$email = $_POST['textfield36'];
		$cmnt = $_POST['textarea'];

		$sql= "INSERT INTO comments (name, st_name, sex, edu,pn_num,email,cmt,category) 
		VALUES ('$name','$st_name','$Gender','$class','$phone','$email','$cmnt','parents')";
			
			mysql_query($sql);
           header('Location:parents.php');
 ?>