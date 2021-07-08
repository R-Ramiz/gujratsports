<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login Form Design | CodeLab</title> -->
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
Admin Login</div>
<form action="_handleClubLogin.php" action="post" method="post">
        <div class="field">
          <input type="text" name="cloginid" required>
          <label>ID</label>
        </div>
<div class="field">
          <input type="password" name="cloginpass" required>
          <label>Password</label>
        </div>
<!-- <div class="content">
         
<div class="pass-link">
<a href="#">Forgot password?</a></div>
</div> -->
<div class="field">
          <input type="submit" value="Login">
        </div>
</form>
</div>
</body>
</html>
