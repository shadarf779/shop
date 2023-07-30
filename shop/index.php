<?php
require_once('connect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      
      <?php
      if (isset($_GET['id'])){
            $product_id = $_GET['id'] ; 
            ?>
            <h3?> Update data </h3>
       <form action="update.php" method="POST">
            <input type="text" Readonly name="product_id" value="<?=$product_id;?>">  
            <input type="text"  placeholder="product Name" name="product_name" required>            
            <input type="number" placeholder="product Price" name="product_price" required>
            <input type="date" placeholder="product Date" name="product_date" required>
            <button type="submit" name="updateproduct"> Update </button>
            
      </form>
      <br>
      <div>
      <a href="index.php"> 
            <button>Add</button>
      </a>
      </div>
      <br>
      <div>
      <a href="delete.php?id=<?=$product_id;?>">
            <button>Delete</button>
            </a>
      </div>
          <br>  
      <?php
      }else { 
            ?>
            <h3>Insert Data</h3>
            <form action="insert.php" method="POST">
            <input type="text" placeholder="product Name" name="product_name" required>
            <input type="number" placeholder="product Price" name="product_price" required>
            <input type="date" placeholder="product Date" name="product_date" required>
            <button type="submit" name="addproduct"> Add </button>
            
      </form> 
      <?php
      }
      ?>
     <table border="2px">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Price</td>
    <td>Date</td>
    <td>Update/delete</td>
  </tr>
  <tbody id="productTable">
    <!-- Loop to display products -->
    <?php
    $getproducts = mysqli_query($connect, "SELECT * FROM clothes ");
    while ($fetch = mysqli_fetch_assoc($getproducts)) {
      $id = $fetch['product_id'];
      $name = $fetch['product_name'];
      $price = $fetch['product_price'];
      $date = $fetch['product_date'] . "<br>";
    ?>
      <tr>
        <td><?= $id; ?></td>
        <td><?= $name; ?></td>
        <td><?= $price; ?></td>
        <td><?= $date; ?></td>
        <td>
          <a href="delete.php?id=<?= $id; ?>"><button style="background:red;">delete</button></a>
          <a href="index.php?id=<?= $id; ?>"><button style="background:blue;">Update</button></a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

     
      
</body>
</html>   