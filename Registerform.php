<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">
     <title>Sing Up</title>
     <link rel="icon" href="images/fevicon.png" type="image/png" />
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
        <div class="sign-up-htm">
        <form method="post">
        <div class="login-wrap">
        <div class="login-html">
            <form action="" method="post">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register Now</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Fullname</label>
                        <input type="text" class="input" placeholder="Enter Your User Name" name="Full_name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Username</label>
                        <input type="text" class="input" placeholder="Enter Your Password" name="User_name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input type="text" class="input" placeholder="Enter Your Password" name="Email_address">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="password" class="input" placeholder="Enter Your Password" name="Password">
                    </div>
                   
                    <div class="group">
                        <input type="submit" class="button" name="btnreg" value="Sign Up">
                    </div>
</form>
<?php

if(isset($_POST['btnreg']))
{
  $fname = $_POST['Full_name'];
  $uname = $_POST['User_name'];
  $email = $_POST['Email_address'];
  $pass = $_POST['Password'];


  $connection = mysqli_connect("localhost","root","","db_e-project");

  $query = "INSERT INTO tbl_register VALUES ('$fname','$uname','$email','$pass')";

 $result = mysqli_query($connection,$query);

 if($result)
 {
  echo "<script>alert ('User Register Successfully');
  window.location.href = 'Loginform.php';
  </script>";
 }

}

?>
</body>
</html>