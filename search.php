<?php

$connection = mysqli_connect("localhost","root","","db_e-project");
$search = $_POST['keysearch'];
$query = "SELECT * FROM tbl_product WHERE product_name LIKE '$search%'";
$result = mysqli_query($connection,$query);
$record = "";
// echo "<div class='row px-xl-5'> ";
foreach($result as $row)
{
    
           $record .=
        "<div class='col-lg-3 col-md-3 col-sm-6 pb-1'>
          <div class='product-item bg-light mb-4'>
          <div class='product-img position-relative overflow-hidden'>  
           <img  src='$row[product_image]' class='img-fluid w-90  ' style = 'height:300px object-fit:cover'  >
         <div class='product-action'>
       <a class='btn btn-outline-dark btn-square'href=''><i class='fa fa-shopping-cart'></i></a>
        <a class='btn btn-outline-dark btn-square'href=''><i class='far fa-heart'></i></a>
        <a class='btn btn-outline-dark btn-square'href='' ><i class='fa fa-sync-alt'></i></a>
         <a class='btn btn-outline-dark btn-square'href='' ><i class='fa fa-search'></i></a>
        </div>
        </div>
       <div class='text-center py-4'>
           <a  class='h6 text-decoration-none text-truncate' href = ''>$row[product_name]</a>
      <div class='d-flex align-items-center justify-content-center mt-2'>
            <h5>$row[product_price]</h5><h6 class='text-muted ml-2'></h6>
        </div>

        </div>
  

        </div>
        </div>";
    // $record .=
    // "<tr>
    // <td>$row[user_id]</td>
    // <td>$row[user_name]</td>
    // <td><button id ='mybtn' rowid = $row[user_id] >Delete</button></td>
    // </tr>
    // ";
}
// echo "</div>"
;
 echo $record;

?>