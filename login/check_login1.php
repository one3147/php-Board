<body bgcolor="black">
   <?php
   session_start();
   $host = 'localhost';
   $user = 'root';
   $pw = 'ubuntu3147.';
   $db_name = 'login';
   $conn = mysqli_connect($host, $user, $pw, $db_name);
   if($conn)
   {
   	echo"<scrit>alert(1);</script>";
   }
   $username = $_POST['id'];
   $userpass = $_POST['pw'];
   $q = "SELECT * FROM login WHERE id = '$username' AND pw = '$userpass'";
   $res = mysqli_fetch_array(mysqli_query($conn,$q));
   if ($res != NULL)
   {
       echo "<script>alert('Welcome!');</script>";
       $_SESSION['username'] = $res['id'];
       $_SESSION['userpass'] = $userpass;
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
