<body>
 <?php
  session_start();
  $host = 'localhost';
  $user = 'root';
  $pw = 'ubuntu3147.';
  $db_name = 'login';
  $conn = mysqli_connect($host, $user, $pw, $db_name);
  $username = $_POST['id'];
  $userpass = $_POST['pw'];
  $email = $_POST['email'];
  $q = "INSERT INTO login(id,pw,email) VALUES('$username','$userpass','$email')";
  $q2 = "SELECT id FROM login where id='$username'";
  $result2 = mysqli_fetch_array(mysqli_query($conn, $q2));
  if($result2[0] == $username)
  {
         echo"<script>alert('ID is aleady exist / ID or Password is empty.');</script>";
         echo"<script>location.replace('index.php');</script>";
  }
  else
  {
         $result = mysqli_fetch_array(mysqli_query($conn, $q));
         echo"<script>alert('Signup Sucess!');</script>";
         echo"<script>location.replace('index.php')</script>";
  }
 ?>
</body>
