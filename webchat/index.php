<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat Application</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <form class="box" action="./backend/login.php" method="post">
      <h1>Sign In</h1>
      <input type="text" name="uname" placeholder="Username">
      <input type="password" name="pass" placeholder="Password">
      <button class="btn btn-info btn-md" name="submit" type="submit"><b>Login</b></button>
      <label style="color: white;">Not a member?</label><br>
      <a href="./backend/register.php">Register now!</a>
    </form>
  </body>
</html>