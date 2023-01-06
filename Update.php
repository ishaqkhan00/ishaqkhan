<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="icon" href="images/fevicon.png" type="image/png" />
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>



                 
    <?php

include("conectivity.php");

    $ida = $_GET['id'];
    $namea = $_GET['name'];
    $quantitya = $_GET['quantity'];
    $pricea = $_GET['price'];
    $imagea = $_GET['img'];
           ?>

           

   <form method="post">
        <div class="login-wrap">
        <div class="login-html">
            <form action="" method="post">

            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Update Data</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                <div class="group">
                <label for="pass" class="label">Product Id</label>
                <input type="number" readonly class="input" placeholder="Enter Your Product Name" name="product_id" value="<?php echo $ida?>">
            </div>
            <div class="group">
                <label for="pass" class="label">Product Name</label>
                <input type="text" class="input" placeholder="Enter Your Product Name" name="product_name" value="<?php echo $namea?>">
            </div>
            <div class="group">
                <label for="pass" class="label">Product_Quantity</label>
                <input type="number" class="input" placeholder="Enter Your Product Quantity" name="product_quantity" value="<?php echo $quantitya?>">
            </div>
            <div class="group">
                <label for="pass" class="label">Product_Price</label>
                <input type="number" class="input" placeholder="Enter Your Product Price" name="product_price" value="<?php echo $pricea?>">
            </div>
            <div class="group">
                <label for="pass" class="label">Product_Image</label>
                <input type="file" class="input" placeholder="Select Yourimage" name="product_image" value="<?php echo $imagea?>">
            </div>
            <div class="group">
                <input type="submit" class="button" name="submitbtn" value="Update Data">
                    </div>
</form>


    <?php

  
     
    if(isset($_POST['submitbtn']))
    {
        $id = $_POST['product_id'];
        $name = $_POST['product_name'];
        $quantity = $_POST['product_quantity'];
        $price = $_POST['product_price'];
        $image = $_POST['product_image'];
        

    $query = "UPDATE tbl_product SET product_id = $id , product_name = '$name', product_quantity = $quantity ,
    product_price = $price, product_image = '$image' WHERE product_id = $id";

    $result = mysqli_query($connection,$query);

    if($result)
    {
        echo "<script>alert('record Updated');
     
  
         </script>";

    

    }
    }

    ?>

    

  
  
</body>
</html>

