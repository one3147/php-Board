<html>
 <head>
  <title>User Info</title>
 </head>
 <body bgcolor="black">
 <?php
  $userid = $_POST['id'];
  $userpass = $_POST['pw'];
  $conn = mysqli_connect('localhost', 'root' , 'ubuntu3147.', 'login');
  $sql = "SELECT * FROM login Where id = '$userid'";
  $res = mysqli_fetch_array(mysqli_query($conn,$sql));
  if(!isset($res['id']) || $userpass != $res['pw'])
  {
  	echo"<script>alert('Invaild id or pw');</script>";
	echo"<script>location.href='./index.php'</script>";
  }
 ?>
  <h3 style="color:green;">Mypage</h3>
   <form action="./change_mypage.php" method="post">
   <table border="3" bordercolor="green" width="600" height="100">
    <tbody>
     <tr align="center">
      <td><strong style="color:green;text-align:center;">Your id : <?php echo $res['id']; ?></strong></td>
      <td><input type="text" name="id" class="id" value="<?php echo $res['id'] ?>"placeholder="Change id?"></td>
     </tr>
     <tr align="center">
      <td><strong style="color:green;text-align:center;">Your password : <?php echo $res['pw']; ?></strong></td>
      <td><input type="text" name="pw" class="pw" value = "<?php echo $res['pw']?>"placeholder="Change pw?"></td>
     </tr>
     <tr align="center">
      <td><strong style="color:green;text-align:center;">Your email : <?php echo $res['email']; ?></strong></td>
      <td><input type="text" name="email" class="email" value = "<?php echo $res['email']?>"placeholder="Change email?"></td>
     </tr>
    </tbody>
   </table>
    <br>
    <input type="hidden" name="user_id" value="<?php echo $userid ?>">
    <div style="text-align:center>"><button type="submit" class="btn" onclick="button()">Change</button></div>
   </form>
</body>
</html>
