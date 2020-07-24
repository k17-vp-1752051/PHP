<?php
//  $connect = mysqli_connect("localhost", "user", "123", "demo");

//  if($connect){
//     $file = $_FILES['import']['tmp_name'];
//     $handle= fopen($file, "r");
//     $i=0;
//     while(($connect=fgetcsv($handle,1000,","))!=false){
//         $table=rtrim($_FILES['import']['name'],".csv");
//         if($i==0){
//         $ClassID=cont[0];
//         $ClassName=cont[1];
// //$query = "INSERT INTO class(ClassID, ClassName) VALUE (ClassID, ClassName)";
//         echo $query, "<br>";
//         mysqli_query($connect, $query);
//         }else{
//             $query = "INSERT INTO class(ClassID, ClassName) VALUE (ClassID, ClassName)";
//             echo $query, "<br>";
//             mysqli_query($connect, $query);
//         }
//         $i++;
//     }
//  }else{
//      echo "connection failed.";
//  }
$connect = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
if(isset($_POST["imp"])){
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES['import']['name']);

    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    $uploadOk = 1;
    if($imageFileType != 'csv'){
        $uploadOk = 0;
    }

    if($uploadOk != 0){
        if(move_uploaded_file($_FILES['import']['tmp_name'], $target_file)){
            $fileexists = 0;
            if(file_exists($target_file)){
                $fileexxist = 1;
            }

            if($fileexists == 1){
                $file = fopen($target_file, "r");
                $index =0;

                $$importData_arr = array();

                while(($data = fgetcsv($file,1000,","))!=FALSE){
                    $num = count($data);

                    for($c = 0; $c < $num; $c++){
                        $importData_arr[$index][] = $data[$c];
                    }
                    $index++;
                }
                fclose($file);

                $skip = 0;
                foreach($importData_arr as $data){
                    if($skip != 0){
                        $ClassID = $data[0];
                        $ClassName = $data[1];

                        $check = "SELECT count(*) as allcount FROM class WHERE ClassID= '.$ClassID.'";

                        $retrieve_data = mysqli_query($connect, $check);
                        $row = mysqli_fetch_assoc($retrieve_data);
                        $count = $row['allcount'];

                        if($count ==0){
                            mysqli_query($connect, "INSERT INTO class(ClassId, ClassName) VALUES ('".$ClassID."',' ".$ClassName."')");
                        }
                    }
                    $skip++;
                }

                if(file_exists($target_file)){
                    unlink($target_file);
                }
            }
        }
    }
}



?>