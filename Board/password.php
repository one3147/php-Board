<?php
$idx = $_GET['idx'];
?>
<html>
 <head>
  <title>Check</title>
 </head>
 <body bgcolor='black'>
  <form action='password_ok.php' method='POST'>
   <input type='text' name='password' placeholder='Input password'/>
   <input type="hidden" value='<?php echo $idx ?>' name='idx' />
   <button type='submit' action='password_ok.php'>submit</button>
  </form>
 </body>
</html>
