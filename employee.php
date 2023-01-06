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
                        <input type="text" class="input" placeholder="Enter Your User Name" name="Emp_name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Designation</label>
                        <input type="text" class="input" placeholder="Enter Your Password" name="Emp_designation">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Phone</label>
                        <input type="number" class="input" placeholder="Enter Your Password" name="Emp_phone">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Salary</label>
                        <input type="number" class="input" placeholder="Enter Your Password" name="Emp_salary">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input type="text" class="input" placeholder="Enter Your Password" name="Emp_email">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="password" class="input" placeholder="Enter Your Password" name="Emp_password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" name="btnpost" value="Sign Up">
                    </div>
</form>
<?php

if(isset($_POST['btnemp']))
{
  $name = $_POST['Emp_name'];
  $desig = $_POST['Emp_designation'];
  $phone = $_POST['Emp_phone'];
  $salary = $_POST['Emp_salary'];
  $email = $_POST['Emp_email'];
  $pass = $_POST['Emp_password'];


  $connection = mysqli_connect("localhost","root","","db_e-project");

  $query = "INSERT INTO `tbl_employee`(`Emp_id`, `Emp_name`, `Emp_designation`, `Emp_phone`,`Emp_salary`,
   `Emp_email`, `Emp_password`)VALUES ('','$name','$$desig','$phone','$salary','$email','$pass')";
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