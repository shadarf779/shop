<?php 
require_once('connect.php');

$id=$_GET['id'];
if (isset($_GET['id']))
{
    echo 'id : ' . $id .' IS DELETED';
    $delete = mysqli_query($connect, "DELETE FROM clothes WHERE product_id='{$id}' " );
}
else
{
    echo $id .'isnt delete';
}
?>