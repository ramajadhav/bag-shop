<?php

    $conn = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($conn,"dbbagshop-ecommerce");
	if($conn)
	{
		
	}
	else
	{
		echo "database Error!!! DataBase is not connected to website.please connect database to website first";
	}
?>