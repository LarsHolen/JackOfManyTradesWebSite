<?php

 header('Content-type: text/html; charset=ISO-8859-15');
 
require "../config.php";
require "../common.php";


if(!session_id()) session_start();
if ($_SESSION['indeks'] < 0) {
     $_SESSION['indeks'] = 0;
}
$i = $_SESSION['indeks'];


$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno())
{
    die("Connection Error: " . mysqli_connect_error());
} 

$lengthSQL = "SELECT COUNT(*) AS total FROM	blog_table WHERE page='programming'";

$lengthQuery = mysqli_query($conn, $lengthSQL);
$lengthBlog = mysqli_fetch_assoc($lengthQuery);

if ($lengthBlog['total'] <= $i) {
    $_SESSION['indeks'] = 0;
    $i = $_SESSION['indeks'];
}

//$sql = "SELECT * FROM blog_table";
$sql = "SELECT * FROM blog_table WHERE page='programming' ORDER BY id DESC LIMIT $i,1";

$query = mysqli_query($conn, $sql);

foreach($query as $q){
    echo '<div style="position: relative; left:50%;transform:translate(-50%,0);width:300px;height: 300px;">
    <img style="height:300px;width:300;border-radius:5px;box-shadow: 0 1px 5px 0 rgba(179, 179, 179, 0.884),0 10px 10px 0 rgba(0,0,0,0.19);" src="' . $q['imageLink'] . '">
    <p style="color: #fff">' . $q['text'] . '</p><p style="color: #fff">Date: '. $q['date'] . ' </p></div>';
 
}
?>