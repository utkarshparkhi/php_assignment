<?php 
$mail = $_POST['username'];
$conn = mysqli_connect('localhost','utkarsh','pass','ass');
if ('$conn'){
	$query = 'select password from users where email="'.$mail.'";';
	$result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_array($result)){
		if ($row['password'] == md5($_POST['password'])){
			echo 'login successfull';
		}
		else{
			echo 'wrong password';
		}
	}
}
mysqli_close($conn);


?>