<?php

class BooksController extends AppController{
    //public $name = "Books";
    // function index(){
    //   $data = $this->Book->find("all");
      
    //   $this->set("data",$data);
    // }


  //   function danhsach(){
  //       $this->paginate = array(
  //         'limit' => 2,// mỗi page có 4 record
  //         'order' => array('id' => 'desc'),//giảm dần theo id
  //       );
  //       $data = $this->paginate("Book");
  //       $this->set("data",$data);
  //  }
  public $name = "Books";
  public $helpers = array('Form','Paginator','Html');
  public $paginate = array();

  function view(){
    $data = $this->Book->find("all");
      
      $this->set("data",$data);

     $conditions = array();
     $data = array();
     if(!empty($this->passedArgs)){
       if(isset($this->passedArgs['Book.title'])) {//kiểm tra xem có tồn tại title hay không
         $title = $this->passedArgs['Book.title'];
         $conditions[] = array( 'Book.title LIKE' => "%$title%", );//điều kiện SQL
         $data['Book']['title'] = $title;//cho giá trị nhập vào mảng data
       }
       if(isset($this->passedArgs['Book.description'])) {
         $description = $this->passedArgs['Book.description'];
         $conditions[] = array( "OR" => array( 'Book.description LIKE' => "%$description%" ) );
         $data['Book']['description'] = $description;
       }
       $this->paginate= array( 'limit' => 2, 'order' => array('id' => 'desc'), );
       $this->data = $data;//Giữ lại giá trị nhập vào sau khi submit
       $post = $this->paginate("Book",$conditions);
       $this->set("posts",$post);
    }
  }
  function search() {
     $url['action'] = 'view';
     foreach ($this->data as $key=>$value){
        foreach ($value as $key2=>$value2){
          $url[$key.'.'.$key2]=$value2;
        }
     }
     $this->redirect($url, null, true);//dùng để chuyển hướng sang action view
  }
}

?>