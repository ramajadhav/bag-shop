<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<style>
</style>
</head>
<body>

<h2>Change Password</h2>
<div class="form">
<form action="" method="post" id="ForgotPasswordForm">
  <div class="imgcontainer">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgGIVZ5z8h6iCFebWvsxzk7_lVfQf9e3PxGI_X52seYwhUkil6NQ" alt="Avatar" class="avatar">
  </div>

  <div class="container">
<div class="form-message" id="msg"></div>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>


    <div class="container" style="background-color:#f1f1f1">
        <a href="login.php" class="cancelbtn" style="text-decoration:none;color:#fff;">Cancel</a>
    </div>

    <button class="btn btn-success" type="submit" name="change" value="reset_password">Send Email</button>
  </div>
  </div>
</form>

</body>

<script type="text/javascript">
  $(document).ready(function(){
    $("#ForgotPasswordForm").on('submit', function(e){
      e.preventDefault();

      var email = $("#email").val();

      // alert(email);
      $.ajax({
        type:"POST",
        url:"forgotpassword_in.php",
        data:{email:email},

        success:function(data){

          $(".form-message").css("display", "block");

          $(".form-message").html(data);
        }
      })
    });
  });
</script>
</html>
<?php
include("db.php");
// if(isset($_POST['change']))
// {
//   $phone = $_POST['phone'];
//   $upass = $_POST['password'];
//   $email = $_POST['email'];

//   //chechink whether the user is registered or not


//   $user = mysqli_query($conn,"select * from signup where phone='$phone' and email='$email'");
//   $usercount = mysqli_num_rows($user);
//   if($usercount<1)
//   {
//     echo '<script>alert("Invalid Credentials");</script>';
//   }
//   else
//   {
//     $qry = mysqli_query($conn,"update signup set upass='$upass' where phone='$phone'");
//     if($qry)
//     {
//       echo '<script>alert("Succesfully Updated!!!");location.href="logout.php";</script>'; 
//     }
//     else
//     {
//       echo '<script>alert("Something wrong!!!");</script>'; 
//     }
//   }
// }

?>