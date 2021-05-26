<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
  
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" class="btn btn-default">Signin</button>
  </form>

  <?php
  require_once 'config.php';
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  $result= $con -> query("SELECT * FROM user WHERE email='$email'AND password='$password'");
  $row = $result -> fetch_assoc();
  if(($row['email'] == $email) && ($row['password'] == $password))
 {
   echo "login sucessful";
 }
else
  {
   echo "login failed";
  }

  ?>
</body>
</html>
