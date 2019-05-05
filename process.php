<?php
//values from the login.php
$username = $_POST['user'];
$password = $_POST['pass'];

//prevents sql injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysqli_connect("localhost", "root", );
mysqli_select_db("login");


$result = mysqli_query("select * from users where username = '$username' and password = '$password'")
            or die("Failed to query database" .mysql_error());
$row = mysqli_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password){
    echo "Login Sucessful" Welcome ".$row['username'];
  } else {
    echo "Login Failed"
  }"
 ?>
