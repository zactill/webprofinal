<!DOCTYPE html>

<html>
<head>
  <title>Login</title>
  <link rel = "stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container">
  <div class ="form">
    <form action="menu.php" method="POST">

    <p>
      <label>Username:</label>
      <input type = "text" id = "user" name = "user" required>
    </p>
    <p>
      <label>Password: </label>
      <input type = "password" id = "pass" name = "pass" required>
    </p>
    <p>
      <input type ="submit" id = "btn" value= "Login">
    </p>

    </form>

      <p>New User? Register <a href="register.php">here</a></p>

    </div>

  </div>

</body>
</html>
