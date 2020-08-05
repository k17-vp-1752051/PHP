<?php
class ValidsController extends AppController{
      public $name = "Valids";
      public $helpers = array('Html','Form');
      public $components = array('Session');

      function vidu1(){
        //print_r($this->data);
        $this->Valid->set($this->data);
        if($this->data){
          if($this->Valid->valid1()== TRUE){
            $this->Session->setFlash("Dữ liệu hợp lệ !");
          }else{
            $this->Session->setFlash("Dữ liệu không hợp lệ!");
          }
        }
     }
 
}