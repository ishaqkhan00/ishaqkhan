<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">
     <title> Login | User </title>
    <link rel = "icon" href = "img/icon.jpg">

     <link rel="icon" href="images/fevicon.png" type="image/png" />
     <link rel="stylesheet" href="style.css" />
     <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
    <h1 style="text-align: center; color: #000;">Login For Employee</h1>
        <div class="login-wrap">
        <div class="login-html">
            <form action="" method="post">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In | Welcome Emp</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input type="text" class="input" placeholder="Enter Your User Name" name="Emp_username">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">User Password</label>
                        <input type="password" class="input" placeholder="Enter Your Password" name="Emp_password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" name="btnreg" value="Employee Login">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
        </form>
<?php
if(isset($_POST['btnreg']))
{
  $uname = $_POST['Emp_username'];
  $upass = $_POST['Emp_password'];
  $connection = mysqli_connect("localhost","root","","db_e-project");
  $query = "SELECT * FROM tbl_employee WHERE Emp_username = '$uname' and Emp_password = '$upass'";
  $result = mysqli_query($connection,$query);
  if(mysqli_num_rows($result))
  {
    $_SESSION['myuser'] =  $uname;
    header("location:Employedash.php");

  } 
  else
  {
    echo "<script>alert('User Incorrect')</script>";
  }
}



?>
        </div>
    </div>

</body>
</html>