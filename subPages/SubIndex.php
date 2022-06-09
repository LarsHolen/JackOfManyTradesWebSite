<?php
 session_start();
if (isset($_SESSION['indeks'] ))
{
   

    $_SESSION['indeks']--;
    header('Location:' . $_SERVER['HTTP_REFERER'] );
} else
{
    $_SESSION['indeks'] = 0;
header('Location:' . $_SERVER['HTTP_REFERER'] );
}

?>