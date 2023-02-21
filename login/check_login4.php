<body>
   <?php
   session_start();
   $host = 'localhost';
   $user = 'root';
   $pw = 'ubuntu3147.';
   $db_name = 'login';
   $mysqli = mysqli_connect($host, $user, $pw, $db_name);
   $username = $_POST['id'];
   $userpass = $_POST['pw'];
   $q = "SELECT pw FROM login WHERE id = '$usermame'";
   $result = mysqli_fetch_array(mysqli_query($conn, $sql));
   if (str_ireplace($result[0]) == str_ireplace(hash("md5", $userpass)))
   {
       $_SESSION['username'] = $username;
       $_SESSION['userpass'] = $userpass;
       echo "<script>alert('Welcome!');</script>";
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
