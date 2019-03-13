<?php
$conn = mysqli_connect('localhost','utkarsh','pass','ass');

if ($conn){

	$phone = $_GET['phone'];
	$query = "SELECT phone from users where phone=$phone;";
	$count = mysqli_query($conn,$query);
	
	if (mysqli_num_rows($count)==1){
		echo 'already in use';
	}
	else{
		echo 'gtg';
		
		
	}
	
	
}
mysqli_close($conn);
?>