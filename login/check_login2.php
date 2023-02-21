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
   $q = "SELECT pw FROM login WHERE id = '$username';";
   $result = mysqli_fetch_array(mysqli_query($conn,$q));
   if($result[0] == $userpass)
   {
       $_SESSION['username'] = $username;
       $_SESSION['userpass'] = $result['pw'];
       echo '<script>alert("Welcome!");</script>';
       echo "<script>location.replace('../index.php');</script>";
       exit;
   }

   else
   {
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>location.replace('../login.php');</script>";
        exit;
   }
   ?>
</body>
