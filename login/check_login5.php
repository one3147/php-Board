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
   $q = "SELECT * FROM login WHERE id = '$username' AND
         pw = '$userpass'";
   $row = mysqli_fetch_array(mysqli_query($conn,$q));
   if ($row != null)
   {
       $_SESSION['username'] = $row['id'];
       $_SESSION['userpass'] = $row['pw'];
       echo "<script>alert('Welcome!');</script>";
       echo "<script>location.replace('../index.php');</script>";
       exit;
   }
   if($row == null)
   {
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>location.replace('../login.php');</script>";
        exit;
   }
   ?>
</body>
