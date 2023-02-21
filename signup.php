<html>
 <head>
  <title>Signup</title>
  <meta charset="utf-8">
 </head>
 <body bgcolor="black">
  <h1 style="text-align:center;color:green;">Register Service</h1>
  <div style="text-align:center;"><strong style="color:green;">Input Your ID</strong></div>
  <br>

  <form method="post" action="./register.php">
   <div style="text-align:center;">

   <input type="text" name="id" placeholder="ID">
   <br>
   <br>
   <strong style="color:green;">Input Your Password</strong>
   <br>
   <br>
   <input type="text" name="pw" placeholder="Password">
   <br>
   <br>
   <strong style="color:green;">Input Your Email</strong>
   <br>
   <br>
   <input type="text" name="email" placeholder="Email">
   <br>
   <br>
   <button type="submit" onclick="button()">signup</button>
  </form>
  <br>

  <button type="button" onclick="location.href='index.php'">main</button></div>


 </body>
</html>
