<?php

 ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
$to = 'lars@larsholen.com';
$subject = $_POST['name'];
//$subject = "Dette er en test";

$message = $_POST['message'];
//$message = "Balle";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'Message from website' . "\r\n";


//$time = time();

mail($to,$subject,$message,$headers);

//echo  'Time: ' . $time;
header('Location:' . $_SERVER['HTTP_REFERER'] );
?>

