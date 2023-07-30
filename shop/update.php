<?php 

require_once('connect.php');
$connect = mysqli_connect('localhost','root','','shop');
//require_once('shop.php')  
 if (isset($_POST['updateproduct'])){
   $id = $_POST['product_id'];
   $name = $_POST['product_name'];
   $price = $_POST['product_price'];
   $date = $_POST['product_date'];

  
    $Update = mysqli_query($connect," 
    UPDATE clothes SET 
    product_name='$name' , product_price='$price' ,product_date='$date' 
    WHERE product_id='$id' ");

    echo "Product is updated";
   } 
 else {
    echo "Product is NOT updated";
 }
?> 