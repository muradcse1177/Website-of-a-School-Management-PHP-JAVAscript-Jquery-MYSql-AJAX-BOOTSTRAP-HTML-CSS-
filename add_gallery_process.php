<?php
session_start();
include "includes/connection.php";


				$prefix=$_SESSION['user_id'].time();
				$link="upload/".$prefix.$_FILES['file']['name'];

				move_uploaded_file($_FILES['file']['tmp_name'], $link);

				$image_link="http://localhost/MyWebsite/".$link;#full link of image

				
				$sql = "INSERT INTO gallery (link,category)VALUES('$link','video')";
                       mysql_query($sql);
                       header('Location:gallery.php');
					   
					   
					   











?>