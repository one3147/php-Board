<html>
 <head>
  <title>DEL</title>
 </head>
 <body>
<?php
 session_Start();
 $username = $_SESSION['username'];
 $idx = $_GET['idx'];
 $conn = mysqli_connect("localhost", "root", "ubuntu3147.", "Board");
 $sql = "DELETE FROM Board WHERE idx=$idx";
 $sql2 = "SELECT writer FROM Board WHERE idx=$idx";
 $result = mysqli_fetch_array(mysqli_query($conn, $sql2));
 if($result['writer'] == $username || $username == 'admin')
 {
        mysqli_query($conn, $sql);
        echo "<script>alert('Delete Sucess!');</script>";
 }
 else
 {
        echo "<script>alert('Failed..');</script>";
 }
 echo "<script>location.href='board.php';</script>";

 ?>
 </body>
</html>
