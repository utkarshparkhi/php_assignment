<html>
<body>

<?php 


$conn = mysqli_connect('localhost','utkarsh','pass','ass');
if ($conn) {
	$password = md5("'".$_POST['password']."'");
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	
	$query = 'INSERT INTO users(email,age,name,phone,password) VALUES("'.$mail.'",'.$age.',"'.$name.'",'.$phone.',"'.$password.'");';

	echo $query;
	
	
	mysqli_query($conn, $query);
}

mysqli_close($conn);
?>
</body>
</html>
