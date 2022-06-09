<?php

 header('Content-type: text/html; charset=ISO-8859-15');
 
require "../config.php";
require "../common.php";


if(!session_id()) session_start();



$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno())
{
    die("Connection Error: " . mysqli_connect_error());
} 


// Finds how many entries
$lengthSQL = "SELECT COUNT(*) AS total FROM	blog_table WHERE page='armwrestling'";

$lengthQuery = mysqli_query($conn, $lengthSQL);
$lengthBlog = mysqli_fetch_assoc($lengthQuery);



// Tester om det er første gang scriptet ble kjørt gra denne siden
if($_SESSION['page'] != $_SERVER["SCRIPT_FILENAME"]  )
{
    $_SESSION['indeks'] = 0;
     $i = $_SESSION['indeks'];
    $_SESSION['page'] = (string) $_SERVER["SCRIPT_FILENAME"];
    
} else
{
    // Test the entry counter.  So going forward at the start, puts you to the end, or going back on the last put you to the start.
    if ($_SESSION['indeks'] < 0) 
    {
       
         $_SESSION['indeks'] = $lengthBlog['total']-1;
    }
    $i = $_SESSION['indeks'];
    
    if ($lengthBlog['total'] <= $i) 
    {
        $_SESSION['indeks'] = 0;
        $i = $_SESSION['indeks'];
    }
}



//$sql = "SELECT * FROM blog_table";
$sql = "SELECT * FROM blog_table WHERE page='armwrestling' ORDER BY date DESC LIMIT $i,1 ";

$query = mysqli_query($conn, $sql);

/*
foreach($query as $q){
    echo '<div style="position: relative; left:50%;transform:translate(-50%,0);width:300px;">
    <img style="height:300px;width:300;border-radius:5px;box-shadow: 0 1px 5px 0 rgba(179, 179, 179, 0.884),0 10px 10px 0 rgba(0,0,0,0.19);" src="' . $q['imageLink'] . '">
    <p style="color: #fff" >' . $q['text'] . '</p><p style="color: #fff">Date: ' . $q['date'] . ' </p></div>';
}
*/

    foreach($query as $q){
        if($q['imageLink'] == "")
        {
            echo '<div style="position: relative; left:50%;transform:translate(-50%,0);width:300px;max_height:80vh;height:80%">
            <p style="color: #fff";text-align:center>' . $q['text'] . '</p><p style="color: #fff";text-align:center>Post: ' . $i+1 . '/' . $lengthBlog['total'] . 
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Date: ' . $q['date'] . ' </p></div>';
        } else
        {
            echo '<div style="position: relative; left:50%;transform:translate(-50%,0);width:100%;">
            <img style="max_height:80vh;margin:auto;Display:grid;height:80%;border-radius:5px;box-shadow: 0 1px 5px 0 rgba(179, 179, 179, 0.884),0 10px 10px 0 rgba(0,0,0,0.19);" src="' . $q['imageLink'] . '">
            <p style="color: #fff;text-align:center" >' . $q['text'] . '</p><p style="color: #fff;text-align:center">Post: ' . $i+1 . '/' . $lengthBlog['total'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Date: ' . $q['date'] . ' </p></div>';
        }
    }
?>