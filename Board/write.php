<!doctype html>
<html>
 <head>
  <title>Board</title>
  <meta charset="utf-8">
 </head>
 <body bgcolor="black">
<?php
 session_start();
 if(!isset($_SESSION['username']))
 {
        echo"<script>alert('please Login');</script>";
        echo"<script>location.href='board.php';</script";
 }
?>
  <div id="board_write">
   <h1 style="color:green;text-align:center">Free_Board</h1>
   <h3 style="color:green;text-align:center;">Write an article.</h3>
    <div id="write_area" style="text-align:center">
     <form action="./write_ok.php" method="post" enctype="multipart/form-data">
      <div id="in_title">
       <textarea name="title" id="utitle" rows="1" cols="100" placeholder="Title" maxlength="100" required></textarea>
      </div>
      <div id="in_content">
       <textarea name="content" id="ucontent" rows="40" cols="100" placeholder="Write the contents" maxlength="3000" required></textarea>
      </div>
       <textarea name="password" id="upassword" rows="1" cols="100" placeholder="Write the password" maxlength="30" required></textarea>
       <br><input class="upload" name="upload_file" type="file" accept= "image/png, image/jepg"/>
      <button type="submit">Complete</button>
     </form>
   </div>
  <div style="text-align:center"><button type="button" onclick="location.href='board.php'">Main</button></div>
 </body>
</html>
write
