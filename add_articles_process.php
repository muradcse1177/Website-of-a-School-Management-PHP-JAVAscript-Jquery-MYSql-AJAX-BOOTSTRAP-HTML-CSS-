<?php
session_start();
include "includes/connection.php";
$title = $_POST['title'];
$notice = $_POST['notice'];
$file = "";



if(false)
		{
			echo "error<\br>";
			header('Location:Articles.php?error=yes');
			die();
		}
		else
			{
				echo "oooooooookkk";
				$prefix=$_SESSION['user_id'].time();
				$link="upload/".$prefix.$_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], $link);

				$image_link="http://localhost/MyWebsite/".$link;#full link of image

				
				$sql = "INSERT INTO notice (title,notice,file,category)VALUES('$title','$notice','$image_link','articles')";
                       mysql_query($sql);
                       header('Location:Articles.php');

            }


?>