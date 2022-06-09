<?php
require "../config.php";
require "../common.php";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno())
{
    die("Connection Error: " . mysqli_connect_error());
} 



$id = $_POST["id"];

$sql = "DELETE FROM blog_table WHERE id = $id";

if (mysqli_query($conn, $sql)) {
echo "Record deleted";
} else {
echo "Error deleting entry: " . mysqli_error($conn);
}

mysqli_close($conn);

?>