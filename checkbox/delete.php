<?php

  header('Content-Type: text/plain');
  $test = utf8_encode($_POST['test']); 
  $data = json_decode($test);

    $stringCheck = join(",", $data->test);

    $connect = mysqli_connect('localhost','user','123','demo');
    $query = "DELETE FROM class WHERE ClassID in($stringCheck) ";
    mysqli_query($connect, $query) or die('Fail!');
    $data = array( 
        'status' => true, 
        'message'=>"Success");

        header('Content-Type: application/json');
        echo json_encode($data);
 ?>
 