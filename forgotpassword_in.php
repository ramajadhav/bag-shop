<?php
include('db.php');
if(isset($_POST['email']))
{
    $email = $_POST['email'];

    // echo $email;

    $query = "SELECT * FROM signup WHERE email = '$email'";

    $r = mysqli_query($conn, $query);

    if(empty($email))
    {
        echo "the field is empty";
    }else{
        if(mysqli_num_rows($r) > 0 )
        {
            $token = uniqid(md5(time()));

            $insert_query = "INSERT INTO forgot_password(email, token) VALUES('$email', '$token')";
            $res = mysqli_query($conn, $insert_query);

            $to = $email;
            $subject = "Password reset link";
            $msg = 'Click <a href="http://localhost/OnlineBagShop/reset.php?token='.$token.'"> Here <a/> to reset your password';

            $message = "Email: "."" .$email. "\n\n" . " " . $msg; 

            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
            $headers .= "From: ". $email;

            if(mail($to, $subject, $message, $headers))

            {

                echo "password link is send to your email account";
            }else {
                echo "failed to send";
                echo mysqli_error($conn);
            }



            // echo "Click <a href='reset.php?token=$token'> Here <a/> to reset your password";
        }else{
            echo "no user found";
        }
    }
}


?>
