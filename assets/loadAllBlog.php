<?php

 header('Content-type: text/html; charset=ISO-8859-15');
 
require "../config.php";
require "../common.php";


$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno())
{
    die("Connection Error: " . mysqli_connect_error());
} 

$sql = "SELECT * FROM blog_table";

$query = mysqli_query($conn, $sql);

foreach($query as $q){
    echo json_encode($q);
}
?>