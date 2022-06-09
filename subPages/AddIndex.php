<?php
if(!session_id()) session_start();
$_SESSION['indeks']++;
header('Location:' . $_SERVER['HTTP_REFERER'] );
?>



