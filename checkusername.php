<?php
$conn = mysqli_connect('localhost','utkarsh','pass','ass');

if ($conn){

	$mail = $_GET['email'];
	

	$query = 'SELECT email from users where email="'.$mail.'";';
	

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