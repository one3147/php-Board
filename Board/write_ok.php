<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
$conn = mysqli_connect('localhost','root', 'ubuntu3147.','Board');
$username = $_SESSION['username'];
$title = $_POST['title'];
$content = $_POST['content'];
$password = $_POST['password'];
$date = date('Y-m-d');
if($_FILES['upload_file'] != NULL)
{
        $tmp_name = $_FILES['upload_file']['tmp_name'];
        $name = $_FILES['upload_file']['name'];
        $path = './files/'.$name;
        $up = move_uploaded_file($tmp_name, $path);
}
$query = "INSERT INTO Board(writer,title,contents,date,watch,like_count,file,password) VALUES('$username','$title','$content','$date', 0, 0,'$name',$password)";
mysqli_query($conn, $query);
echo"<script>alert('Complete. writer:$username');</script>";
echo"<script>location.href='./board.php';</script>"
?>
