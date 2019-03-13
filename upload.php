<?php
session_start();
if (isset($_POST['submit'])){
		$uploads_dir ='/uploads';
	    	
	        $tmp_name = $_FILES["profile"]["tmp_name"];
	        // basename() may prevent filesystem traversal attacks;
	        // further validation/sanitation of the filename may be appropriate
	        $name = basename($_SESSION['id'].".jpeg");

#	        $_FILES["profile"]["tmp_name"]=$name;
	        move_uploaded_file($tmp_name, "./$uploads_dir/$name");
	        header("location:homepage.php");
	    

}