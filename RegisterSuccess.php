<?php 
    session_start();
    $Rphonenumber = $_SESSION['Rphonenumber'];
    $Rpassword = $_SESSION['Rpassword'];
    // $LinkToDatabase = mysqli_connect("localhost","migos","","migosdatabase","3306");
    $LinkToDatabase = mysqli_connect("localhost","root","root","migosdatabase","3306");
    if (mysqli_connect_error()){
        die();
    }
    $Registerinfoquery = " INSERT INTO member VALUES('".$Rphonenumber."','','','".$Rpassword."')";
    $UserData = mysqli_query($LinkToDatabase,$Registerinfoquery);
    header('location: MainMenu.php');
    die();
?>