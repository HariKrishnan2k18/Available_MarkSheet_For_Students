<!DOCTYPE html>
<html>
<head>
  <title> Signin</title>
</head>
<body>
	<center><b><p>Welcome Admin :)</p></b></center>
  <link rel="stylesheet" href="style.css">
<form action="action.php" method="post">
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter User Name" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
</body>
</html>