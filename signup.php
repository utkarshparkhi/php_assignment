<html>
<body>

<?php 


$conn = mysqli_connect('localhost','utkarsh','pass','ass');
if ($conn) {
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	
	$query = "INSERT INTO users(email,age,name,phone,password) VALUES('$mail',$age,'$name',$phone,'$password');";

	echo '<a href= "login.html">you have been registered</a>'	;
	
	
	mysqli_query($conn, $query);
}
else{
	echo '<a href = "signup.html">there is a problem please try again</a>';
}

mysqli_close($conn);
?>




</body>
</html>
