<?php
session_start();
error_reporting();
$login = 0;
$admin = 0;
if(isset($_SESSION['phone']))
{
  $login = 1;
}
if(isset($_SESSION['id']))
{
  $admin = 1;
}
?>
<html>
<head>
  <title></title>
  <?php
    function money($money){
        $len = strlen($money);
        $m = '';
        $money = strrev($money);
        for($i=0;$i<$len;$i++){
            if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len){
                $m .=',';
            }
            $m .=$money[$i];
        }
        return strrev($m);
    }
?>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="bootstrap.bundle.min.js"></script>
  
  <style>
    body
    {
      font-family:Trebuchet MS,Arial,Helvetica,sans-serif;
    }
    .img
    {
        width:170px;
        height:200px;
        margin:auto;
    }
    .btn-primary
    {
      background:#01cbc6;
    }
  </style>


  <script>
    $(document).ready(function(){
      if(<?php echo $login;?>)
      {
        $("#drop").css("display","block");
        $("#login").css("display","none");
        $("#adminpage").css("display","none");
      }
      else if(<?php echo $admin;?>)
      {
        $("#drop").css("display","none");
        $("#login").css("display","none");
        $("#adminpage").css("display","block");
      }
      else
      {
        $("#drop").css("display","none");
        $("#login").css("display","block");
        $("#adminpage").css("display","none");
      }
    })
  </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background:#e74292">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">
<h2>Online BagShop</h2>    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link login" href="login.php" id="login">Login & Signup</span></a>
      </li>
      <li class="nav-item dropdown" id="drop">
        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#drop">My Account</a>
        <div class="dropdown-menu">
          <a href="useraccount.php" class="dropdown-item">My Account</a>
          <a href="order.php" class="dropdown-item">My Orders</a>
          <a href="cart.php" class="dropdown-item">My Cart</a>
          <a href="logout.php" class="dropdown-item">Logout</a>
        </div>
      </li>
      <?php 
       ?>
      <li class="nav-item">
        <a class="nav-link" href="admin.php" id="adminpage">Admin Page</span></a>
      </li>
    </ul>

  </div>
</nav>

<script src="C:\Users\Acer\Desktop\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>