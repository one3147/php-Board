<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
</head>
<body bgcolor="black">

    <h2 style="color:green;text-align:center">LOGIN & REGISTER SERVICE</h2>
    <div style="text-align:center;">
    <form method="post" action="/login/check_login1.php" class="loginForm">
     <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
     </div>

     <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
     </div>

     <button type="submit" class="btn" onclick="button()">LOGIN</button>
    </form><br>
<!--
    <form method="post" action="/login/check_login2.php" class="loginForm">
     <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
     </div>

     <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
     </div>

     <button type="submit" class="btn" onclick="button()">LOGIN(2 ID OR Auth)</button>
    </form>
    <br><br>

    <form method="post" action="/login/check_login3.php" class="loginForm">
     <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
     </div>

     <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
     </div>

     <button type="submit" class="btn" onclick="button()">LOGIN(3 ID AND Auth(Hash))</button>
    </form>
    <br><br>

    <form method="post" action="/login/check_login4.php" class="loginForm">
     <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
     </div>

     <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
     </div>

     <button type="submit" class="btn" onclick="button()">LOGIN(4 ID OR Auth(Hash))</button>
    </form>
    <br><br>

    <form method="post" action="/login/check_login5.php" class="loginForm">
     <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
     </div>

     <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
     </div>

     <button type="submit" class="btn" onclick="button()">LOGIN(5 ID AND Auth(\n))</button>
    </form>
    <button type="button" class="btn" onclick=location.href='index.php' style="display:inline-block;">main</button>
    <br>-->
    <strong style="color:green;">No account?</strong>
    <button type="button" class="btn" onclick="location.href='signup.php'">Signup</button>
    </div>
</body>
</html>
