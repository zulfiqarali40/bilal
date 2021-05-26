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
    
<div class="container">
  
  <form action="registeration.php" method="POST">
  <div class="form-group">
      <label for="firstname">FirstName:</label>
      <input type="name" class="form-control" id="FirstName" placeholder="Enter FirstName" name="FirstName">
    </div>
    <div class="form-group">
      <label for="LastName">LastName:</label>
      <input type="name" class="form-control" id="LastName" placeholder="Enter LastName" name="LastName">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">phone:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmpass" placeholder="Enter password" name="confirmpass">
    </div>
    
    <button type="submit" class="btn btn-default">Signup</button>
  </form>
</div>

<?php
require_once 'config.php';
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pwd'];
$confirmpassword=$_POST['confirmpass'];

if($password != $confirmpassword) {
  echo "Password do not match";
} else {
  
$qry="INSERT INTO user(firstname,lastname,email,phone,password) VALUES ('$firstname','$lastname','$email','$phone','$password')";

if($con -> query($qry))
{
    echo "Registration sucessfull";
}

else
{
    echo "Data does not inserted sucessfully";
}

}
?>

</body>
</html>