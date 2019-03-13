<?php

$mail = $_POST['username'];
$password = md5($_POST['password']);
$conn = mysqli_connect('localhost','utkarsh','pass','ass');
if ('$conn'){
	$query = "select * from users where email='$mail' and password='$password';";
	$result = mysqli_query($conn,$query);
	
    
	if (mysqli_num_rows($result) == 1){
		session_start();
		while($row = mysqli_fetch_assoc($result)) {
			
        $_SESSION['id']= $row['id'];
    }
		header('location:homepage.php');
    
    echo '1';

	}
	else{
		echo 'invalid username or password try again <a href = "login.html">click here</a> to go to login page';
	}
}	
$hour = time() + 3600 * 24 * 30;
setcookie('username', $mail, $hour);
setcookie('password', $password, $hour);

mysqli_close($conn);


?>