<?php
$idx = $_POST['idx'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost','root','ubuntu3147.','Board');
$sql = "SELECT * FROM Board Where idx='$idx'";
$res = mysqli_fetch_array(mysqli_query($conn,$sql));
if ($password == $res['password'])
{
	echo"<script>location.href='article.php?idx=$idx&&key=$password'</script>";
}
else
{
	echo"<script>alert('password check Failed..');</script>";
	echo"<script>location.href='../index.php'</script>";
}
?>
