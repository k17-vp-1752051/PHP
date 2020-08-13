<?php
  $link = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
  mysqli_select_db($link,"demo") or die(mysql_error());


$query = "SELECT * FROM books";
$result = mysqli_query($link, $query);
 if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

        header('Content-Type: application/json');
        echo json_encode($row);
    }
 }
 
?>

