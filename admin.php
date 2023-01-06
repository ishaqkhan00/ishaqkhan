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
                        <label for="user" class="label">Admin_Name</label>
                        <input type="text" class="input" placeholder="Enter Your User Name" name="Admin_Name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Admin_Username</label>
                        <input type="text" class="input" placeholder="Enter Your name" name="Admin_Username">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Admin_Phone</label>
                        <input type="number" class="input" placeholder="Enter Your Phone" name="Admin_Phone">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input type="text" class="input" placeholder="Enter Your email" name="Email_address">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="password" class="input" placeholder="Enter Your Password" name="Password">
                    </div>
                  
                    <div class="group">
                        <input type="submit" class="button" name="btnadmin" value="Sign Up">
                    </div>
</form>
<?php

if(isset($_POST['btnadmin']))
{
  $Aname = $_POST['Admin_Name'];
  $uname = $_POST['Admin_Username'];
  $phone = $_POST['Admin_Phone'];
  $email = $_POST['Email_address'];
  $cpass = $_POST['Password'];

  $connection = mysqli_connect("localhost","root","","db_e-project");

  $query = "INSERT INTO `tbl_admin`(`Admin_Name`, `Admin_Username`, `Admin_Phone`, `Email_address,
    `Password`)VALUES ('','$Aname','$uname','$phone','$email','$cpass')";
 print_r($query);
 $result = mysqli_query($connection,$query);

 if($result)
 {
  echo "<script>alert ('User Register Successfully');
  window.location.href = 'LoginForm.php';
  </script>";
 }

}


?>
</body>
</html>