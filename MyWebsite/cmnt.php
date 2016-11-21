<?php require_once("includes/connection.php"); ?>
<?php 
		$name = $_POST['textfield3'];
		$brth = $_POST['textfield34'];
		$Gender = $_POST['Gender'];
		$education = $_POST['education'];
		$phone = $_POST['phone'];
		$email = $_POST['textfield36'];
		$cmnt = $_POST['textarea'];

		$query = "INSERT INTO `school_db`.`comments` (`name`, `brth`, `sex`, `edu`, `pn_num`, `email`, `cmt`) 
		VALUES ('{$name}', '{$brth}', '{$Gender}', '{$education}', '{$phone}', '{$email}', '{$cmnt}')";
			$result = mysql_query($query, $connection);
			if ($result) {
				mysql_close();
				$username = " Successful";
				header("Location: index.php?msg=$username");
			} else {
				$username = " NOT Successful.. Try Again";
				header("Location: index.php?msg=$username");
			}
 ?>