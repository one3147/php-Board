<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Main</title>
</head>
<?php
session_Start();
if(!isset($_SESSION['username']) && !isset($_SESSION['userpass']))
{
        echo'<h1><p style="color:green;text-align:center;">Please Login Your account.</p></h1>';
        echo'<div style="text-align:center;"><button type="button" class="btn" onclick="location.href=\'login.php\'" style="display:inline-block;">login</button></div><br>';
	echo'<div style="text-align:center;"><button type="button" class="btn" onclick="location.href=\'signup.php\'">Signup</button></div><br>';
	echo'<div style="text-align:center;"><button type="button" class="btn" style="text-align:center;"onclick="location.href=\'address.php\'">Address</button></div><br>';

}
else
{
        $username = $_SESSION['username'];
	echo'<h1><p style="color:green;text-align:center;">Hi, '.$username.'</p></h1>';
	echo'<div style="text-align:center;"><button type="button" class="btn" style="text-align:center;"onclick="location.href=\'logout.php\'">logout</button></div><br>';
	echo'<div style="text-align:center;"><button type="button" class="btn" style="text-align:center;"onclick="location.href=\'address.php\'">Address</button></div><br>';
	echo'<div style="text-align:center;"><button type="button" class="btn" style="text-align:center;"onclick="location.href=\'checkinfo.php\'">MyPage</button></div><br>';
	echo'<div style="text-align:center;"><button type="button" class="btn" style="text-align:center;"onclick="location.href=\'./board/board.php\'">Boards</button></div><br>';
}
?>
<body bgcolor="black">
 <p style="color:green;text-align:center;"><strong>Web Free Board Service</strong></p>
 <?php
  if(isset($_SESSION['username']))
  {
          echo'<strong><p style="color:green;text-align:center">Welcome to My Page, '.$username.'</p></strong>';
  }
 ?>
</body>
