      $cvv=$_POST['cvv'];
    $cardnumber=$_POST['cardnumber'];
    $injector = array("|", ">", "<");
    $occurence=0;
    foreach($injector as $i)
    {
        $occurence=$occurence+substr_count($cvv,$i);
    }
   foreach($injector as $i)
    {
        $occurence=$occurence+substr_count($cardnumber,$i);
    }
 
       







    if($occurence>=1 )
    {
        $_SESSION['attempt']=$_SESSION['attempt']+1;
        if($_SESSION<3)
        {
        echo '<script>alert("SQL INJECTION is detected !!!! attempt number-'. $_SESSION['attempt'].'");location.href="index.php";</script>';
        }
    else
    {
        $BLOCK=0;
        $PHONE=$_SESSION['phone'];
         $qry = mysqli_query($conn,"update signup set STATUS='$BLOCK' where phone='$phone'");
    if($qry)
    {

    }
    }
   }





