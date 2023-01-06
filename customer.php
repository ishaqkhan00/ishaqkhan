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
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> Register Now</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Fullname</label>
                        <input type="text" class="input" placeholder="Enter Your User Name" name="Customer_name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Username</label>
                        <input type="text" class="input" placeholder="Enter Your Password" name="Customer_username">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Phone</label>
                        <input type="number" class="input" placeholder="Enter Your Password" name="Customer_phone">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input type="text" class="input" placeholder="Enter Your Password" name="Customer_email">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="password" class="input" placeholder="Enter Your Password" name="Customer_password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" name="btnpost" value="Sign Up">
                    </div>
</form>
<?php

if(isset($_POST['btnpost']))
{
  $cname = $_POST['Customer_name'];
  $uname = $_POST['Customer_username'];
  $phone = $_POST['Customer_phone'];
  $email = $_POST['Customer_email'];
  $cpass = $_POST['Customer_password'];

  $connection = mysqli_connect("localhost","root","","db_e-project");

  $query = "INSERT INTO `tbl_customer`(`Customer_id`, `Customer_name`, `Customer_username`, `Customer_phone`,
   `Customer_email`, `Customer_password`)VALUES ('','$cname','$uname','$phone','$email','$cpass')";
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