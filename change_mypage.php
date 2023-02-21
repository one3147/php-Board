<?php
 $changeid = $_POST['id'];
 $changepw = $_POST['pw'];
 $changeemail = $_POST['email'];
 $userid = $_POST['user_id'];
 $conn = mysqli_connect('localhost', 'root' , 'ubuntu3147.', 'login');
 $check_sql = "SELECT * FROM login Where id = '$userid';";
 $res10 = mysqli_fetch_array(mysqli_query($conn,$check_sql));
 $sql = "UPDATE login SET id='$changeid', pw='$changepw', email='$changeemail' where id='$userid';";
 $res = mysqli_query($conn,$sql);
 echo "<script>alert('Sucess!');</script>";
 echo "<script>location.href='./index.php'</script>";
?>
