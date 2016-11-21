<?php require_once("includes/connection.php"); ?>

<?php
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if ( $username!="" && $password!="" ) {
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT id, userName, category ";
			$query .= "FROM userlogin ";
			$query .= "WHERE userName = '{$username}' ";
			$query .= "AND userPassword = '{$password}' ";
			$query .= "AND approve = '1' ";
			$result_set = mysql_query($query);
			if (mysql_num_rows($result_set) == 1) {
				$found_user = mysql_fetch_array($result_set);
				session_start();
				$_SESSION['user_id'] = $found_user['id'];
				$_SESSION['user_title'] = $found_user['category'];
				$_SESSION['user_name'] = $username;

				header("Location: index.php");
			} else {
				// username/password combo was not found in the database
				session_destroy();
				$username = " NOT Successful.. Try Again";
				header("Location: index.php?msg=$username");
			}
		} 
		 


?>