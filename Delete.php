<?php

include("conectivity.php");

 $myid = $_GET['id'];

 $query = "DELETE FROM tbl_product WHERE product_id = $myid ";

 $result = mysqli_query($connection,$query);

 if($result)
 {
    echo "<script> alert('Record Delted');
     window.location.href = 'Show Product.php';
    
    </script>";
 }




?>