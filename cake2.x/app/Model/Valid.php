<?php
class Valid extends AppModel {
      public $useTable = false;
      public $validate = array();
 
}

function valid1(){
    $this->validate = array(
       "name" => array(
            "rule" => "notBlank",
            "message" => "Name not empty !",
        ),
        "email" => array(
            "rule" => "notBlank", // tập luật là không rỗng
            "message" => "Email not empty !", // thông báo khi có lỗi
         ),
  
     );
  if($this->validates($this->validate)) // nếu dữ liệu đã được validate (hợp lệ)
  return TRUE;
  else
  return FALSE;
  }
?>