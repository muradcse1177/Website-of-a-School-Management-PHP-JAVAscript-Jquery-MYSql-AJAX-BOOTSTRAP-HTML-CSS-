<?php require_once("includes/connection.php"); ?>

<?php
	
		$username = $_POST['username'];
		$password = $_POST['password'];

			$query = "INSERT INTO userlogin (
							userName, userPassword
						) VALUES (
							'{$username}', '{$password}'
						)";
			$result = mysql_query($query, $connection);
			if ($result) {
				mysql_close();

				header("Location: index.php");
			} else {
				$username = " NOT Successful.. Try Again";
				header("Location: index.php?msg=$username");
			}
		
?>