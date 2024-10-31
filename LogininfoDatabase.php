<?php
    // $LinkToDatabase = mysqli_connect("localhost","migos","","migosdatabase","3306");
    $LinkToDatabase = mysqli_connect("localhost","root","root","migosdatabase","3306");
    if (mysqli_connect_error()){
        die();
    }
    $userinfoquery = "SELECT * FROM `member`;";
    $UserData = mysqli_query($LinkToDatabase,$userinfoquery);

    $userorderquery = 'Select * FROM ordertable where (PhoneNumber = "'.$ReceiveVariable.'")';
    $Userorder = mysqli_query($LinkToDatabase,$userorderquery);

    $deliveredquery = "Select Order_ID FROM delivery";
    $delivered = mysqli_query($LinkToDatabase,$deliveredquery); 
?>