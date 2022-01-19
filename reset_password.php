<?php
include('db.php');

if(isset($_POST['email']) || ($_POST['password'])  || ($_POST['cpassword']) )

{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(empty($password) || empty($password) ){
        echo "empty field";
    }else{
        if($password == $cpassword){

            $hashed = md5($password);

            $query = "UPDATE signup SET upass = '$hashed' WHERE email = '$email'";
            $res = mysqli_query($conn, $query);


            $query_dlt = "DELETE FROM forgot_password WHERE email = '$email'";
            $res_dlt = mysqli_query($conn, $query_dlt);


            echo "password updated successfully";


        }else{
            echo "password do not match";
        }
    }

}

?>
