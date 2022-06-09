<?php

 header('Content-type: text/html; charset=ISO-8859-15');
 
require "../config.php";
require "../common.php";

  try  {
    $connection = new PDO($dsn, $username, $password, $options);
    
    
  //  id / text / imageLink / date / page
   /*
    
    $B1 = $_POST['BRYTER'];
    $B2 = $_POST['KLUBB'];
   
    echo $B1 . $B2 . $ARM . $KONK . $KONK . $DATO;
    
    
     $new_bryter = array(
      "NAVN"        => $_POST['NAVN'],
      "KLUBB"  => $_POST['KLUBB']
      );
    
    
    
     $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "bryter",
      implode(", ", array_keys($new_bryter)),
      ":" . implode(", :", array_keys($new_bryter))
    );
    
    */
    
    $text =  $_POST['text'];
    $imageLink = $_POST['imageLink'];
    $date =  $_POST['date'];
    $page =  $_POST['page'];
   
    
    
     $new_entry = array(
        "text" => $text,
        "imageLink"  => $imageLink,
        "date"    => $date,
        "page"    => $page
      );
    
    
    
     $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "blog_table",
      implode(", ", array_keys($new_entry)),
      ":" . implode(", :", array_keys($new_entry))
    );
    //echo $sql;
    $statement = $connection->prepare($sql);
    $statement->execute($new_entry);
    echo "LAGRET" . $text . $page . $imageLink . $date;
    
    

  } catch(PDOException $error) {
      echo "ErrorH";
      echo $sql . "<br>" . $error->getMessage();
  }

?>