<?php
$connect = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
if(isset($_GET['ids'])){
    $q = $_GET['ids'];
    $query = "DELETE FROM class WHERE ids = '$q'";
    mysqli_query($connect, $query) or die('Fail!');
    header('location: index.php');
}
?>