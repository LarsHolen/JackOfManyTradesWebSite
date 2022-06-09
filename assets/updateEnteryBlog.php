<?php
require "../config.php";
require "../common.php";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno())
{
    die("Connection Error: " . mysqli_connect_error());
} 

/*

$id = $_POST["id"];
$text = $_POST["text"];
$imageLink = $_POST["imageLink"];
$date = $_POST["date"];
$page = $_POST["page"];



$sql = "UPDATE blog_table SET text=$text, imageLink=$imageLink, 
date=$date, page=$page WHERE id=$id";
*/


    $id = $_POST['id'];
    $text =  $_POST['text'];
    $imageLink = $_POST['imageLink'];
    $date =  $_POST['date'];
    $page =  $_POST['page'];
   
    
    
     $new_entry = array(
         "id" => $id,
        "text" => $text,
        "imageLink"  => $imageLink,
        "date"    => $date,
        "page"    => $page);
        
      
        

    //$sql = "UPDATE blog_table SET text ='test', imageLink='https://larsholen.com/images/ada_tiki4.jpg', date='2022-06-04', page='Programming' WHERE id=37";
    $sql = sprintf(
      "UPDATE %s SET text =%s, imageLink=%s, date=%s, page=%s WHERE id=%s",
      "blog_table","'".$text."'", "'". $imageLink."'", "'". $date."'", "'". $page."'", $id);
      echo $sql;
     /* 
       $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "bryter",
      implode(", ", array_keys($new_bryter)),
      ":" . implode(", :", array_keys($new_bryter))
    );
*/


if (mysqli_query($conn, $sql)) {
echo "Record deleted";
} else {
echo "Error deleting entry: " . mysqli_error($conn);
}

    


if (mysqli_query($conn, $sql)) {
echo "Record updated";
} else {
echo "Error updating entry: " . mysqli_error($conn);
}

mysqli_close($conn);

?>