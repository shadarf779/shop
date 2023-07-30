<?php 
require_once('connect.php');
$connect = mysqli_connect('localhost','root','','shop');
//require_once('shop.php')  
 if (isset($_POST['addproduct'])){
   $name = $_POST['product_name'];
   $price = $_POST['product_price'];
   $date = $_POST['product_date'];
     $name = stripcslashes($name);
     $name = mysqli_real_escape_string($connect, $name);
     $price = stripcslashes($price);
     $price = mysqli_real_escape_string($connect, $price);
    echo "Product Added";
    $insert = mysqli_query($connect," 
    INSERT INTO clothes( product_name,product_price,product_date) 
    VALUE ('$name','$price','$date')");
 
   } 
 else {
    echo "Product is NOT Added";
 }


?>