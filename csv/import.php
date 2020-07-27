<?php


class import extends mysqli
{
    // public function construct()
    // {
    //     parent::__construct("localhost", "user", "123", "demo");
    //     if($this->connect_error){
    //         echo "Fail!" .$this->connect_error;;
    //     }
    // }


public function importFile($file){
    $file = fopen($file, 'r');
    while($row = fgetcsv($file)){
        var_dump($row);
    }
}
}

?>