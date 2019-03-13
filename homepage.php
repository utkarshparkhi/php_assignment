<html>
<body>

<?php


session_start();
if (isset($_SESSION['id'])){

$conn = mysqli_connect('localhost','utkarsh','pass','ass');
$id = $_SESSION['id'];
$query = "SELECT * from users where id = '$id';";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$PI = array('email','name','phone','age','gender');
echo "<img src='uploads/$id.jpeg'></img> <br>";
for ($x = 0;$x <5;$x = $x +1){
	echo $PI[$x] . " ; ".$row[$PI[$x]].'<br>';
}

if (isset($_POST['logout'])){
session_destroy();

setcookie('username','',0);
setcookie('password','',0);
header('location:loginf.php');
}
}
else{
	header('location:loginf.php');
}

?>

<form method="POST">
	<input type="submit" name="logout" value ='logout'>
</form>
to change or upload profile photo uploadthe file here <br>

<form method ="POST" action ="upload.php" enctype="multipart/form-data">
<input type ="file" name = "profile">
<button type="submit" name = "submit">UPLOAD PHOTO</button>
</form>

</body>
</html>