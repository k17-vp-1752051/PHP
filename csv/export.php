<?php
if(isset($_POST["export"])){
    $connect = mysqli_connect("localhost", "user", "123", "demo");
    header('Content-Type:text/csv; charset=utf-8');
    header('Content-Disposition:attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('ClassID', 'ClassName'));
    $query = "SELECT * FROM class ORDER BY ClassID DESC";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output, $row);
    }
    fclose($output);
}
?>