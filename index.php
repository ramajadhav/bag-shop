<?php
include("db.php");
$skybags = mysqli_query($conn,"select * from products where pcategory = 'skybags' order by pid desc limit 4");
$americantourister = mysqli_query($conn,"select * from products where pcategory = 'americantourister' order by pid desc limit 4");
$adidas= mysqli_query($conn,"select * from products where pcategory = 'adidas' order by pid desc limit 4");
$tomyhilfiger= mysqli_query($conn,"select * from products where pcategory = 'tomyhilfiger' order by pid desc limit 4");
?>


<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
          .card-img
          {
            width:350px;
            height:300px;
          }
        </style>
     </head>
     <?php

include("header.php");

?>
<body>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-75" src="slider\banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="slider\banner2.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h2 class="text-center my-3 d-block">BAGS & TRAVEL PACK</h2>


<!--        Top Categories    -->
<h2 class="text-center my-3 d-block">TOP Sky Bags</h2>

<div class="row no-gutters container mx-auto text-center">
<?php

while($f = mysqli_fetch_assoc($skybags))
{
  echo '<a href="view_product.php?id='.$f['pid'].'" class="text-dark text-center nav-link p-0">
            <div class="card col-3">
                <img src="all_pic/'.$f['path'].'" class="img" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">'.substr($f['pname'],0,50).'</h5>
                    
                    <p class="card-text text-success">Rs.'.$f['price'].'.00</p>
                </div>
                <a href="view_product.php?id='.$f['pid'].'" class="btn btn-primary my-3 w-75 mx-auto">Shop Now</a>
            </div>
            </a>';
}  

  ?>
</div>


<!--         Categories    -->
<h2 class="text-center my-3 d-block">TOP AMERICAN TOURISTER Bags</h2>

<div class="row no-gutters container mx-auto text-center">  
<?php

while($v = mysqli_fetch_assoc($americantourister))
{
  echo '<a href="view_product.php?id='.$v['pid'].'" class="text-dark nav-link p-0">
          <div class="card col-3">
            <img src="all_pic/'.$v['path'].'" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title m-0">'.substr($v['pname'],0,50).'</h5>
                
                <p class="card-text text-success">Rs.'.$v['price'].'.00</p>
              </div>
            <a href="view_product.php?id='.$v['pid'].'" class="btn btn-primary my-3 w-75 mx-auto">Shop Now</a>
          </div>
        </a>';
}  

  ?>
</div>


<!--         Categories    -->
<h2 class="text-center my-3 d-block">TOP ADIDAS  Bags</h2>

<div class="row no-gutters container mx-auto text-center">  
<?php

while($v = mysqli_fetch_assoc($adidas))
{
  echo '<a href="view_product.php?id='.$v['pid'].'" class="text-dark nav-link p-0">
          <div class="card col-3">
            <img src="all_pic/'.$v['path'].'" class="img" alt="...">
              <div class="card-body">
                <h5 class="card-title m-0">'.substr($v['pname'],0,50).'</h5>
                
                <p class="card-text text-success">Rs.'.$v['price'].'.00</p>
              </div>
            <a href="view_product.php?id='.$v['pid'].'" class="btn btn-primary my-3 w-75 mx-auto">Shop Now</a>
          </div>
        </a>';
}  

  ?>
</div>


<!--         Categories    -->
<h2 class="text-center my-3 d-block">TOP TOMY HILFIGER Bags</h2>

<div class="row no-gutters container mx-auto text-center">  
<?php

while($v = mysqli_fetch_assoc($tomyhilfiger))
{
  echo '
          <div class="card col-3">
            <img src="all_pic/'.$v['path'].'" class="img" alt="...">
              <div class="card-body">
                <h3 class="card-title text-white m-0" style="color:white">'.substr($v['pname'],0,50).'</h3>
                
                <p class="card-text text-success">Rs.'.$v['price'].'.00</p>
              </div>
            <a href="view_product.php?id='.$v['pid'].'" class="btn btn-primary my-3 w-75 mx-auto">Shop Now</a>
          </div>
        ';
}  

  ?>
</div>

<?php

include "footer.html";

?>

</body>
</html>
