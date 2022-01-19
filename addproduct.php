<?php
include "db.php";
?>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Add Product</h2>

<form method="post" action="addproduct.php" enctype="multipart/form-data">
  <div class="container">
    <label for="uname"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Productname" name="pname" required>

    <label for="price"><b>Price</b></label>
    <input type="number" placeholder="Price" class="phone" name="price" required>

    <label for="size"><b>Quantity</b></label>
    <input type="number" placeholder="Quantity" class="phone" name="qty" required>

    <label for="category"><b>Category</b></label>
    <input type="text" placeholder="category" name="category" required>

    <label for="description"><b>description</b></label>
    <input type="text" placeholder="description" name="description"  required>

    <label for="file"><b>Select Image</b></label>
    <input type="file" name="file">
    <br><br>
    <a href="admin.php" class="cancelbtn" style="text-decoration:none;color:#fff;">back</a>
    <br><br>
    <br><button type="submit" name="add">Add Product</button>
  </div>
</form>
</body>
</html>

<?php

if(isset($_POST['add']))
{
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $category = $_POST['category'];
    $img = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $description = $_POST['description'];
    $qry = mysqli_query($conn,"insert into products values('$name','$price','$qty','0','$category','$img','$description')");
    if($qry)
    {
        echo '<script>alert("Done");</script>';
    }
    else
    {
        echo '<script>alert("Error");</script>';
    }
}

?>