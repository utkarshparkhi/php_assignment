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
	$name = $_POST["name"];
	$gender = $_POST['gender'];
	
	if ((preg_match("/^[a-zA-Z ]*$/",$name)) and (filter_var($mail, FILTER_VALIDATE_EMAIL))) {
	

	$query = "INSERT INTO users(email,age,name,phone,password,gender) VALUES('$mail',$age,'$name',$phone,'$password','$gender');";

	
	
	
	mysqli_query($conn, $query);
	echo '<a href= "loginf.html">you have been registered</a>'	;
}
}
else{
	echo '<a href = "signup.html">there is a problem please try again</a>';
}

mysqli_close($conn);
?>




</body>
</html>
