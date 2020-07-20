<?php
 $link = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
if(isset($_GET['id'])){
    $ClassID = $_GET['id'];
    $query = "DELETE FROM class WHERE ClassID = '$ClassID'";
    mysqli_query($link, $query) or die('Fail!');
    header('location: class.php');
}
?>