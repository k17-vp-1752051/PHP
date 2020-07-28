<?php
$dbhost							= "localhost";
$dbuser							= "user";
$dbpass							= "123";
$dbname							= "demo";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysqli_select_db($dbname);
?>