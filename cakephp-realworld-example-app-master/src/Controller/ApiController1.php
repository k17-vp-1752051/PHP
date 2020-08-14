<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class ApiController extends AppController
    {
        public $name = "Users";

        function index() {
          $data = $this->Users->find("all");

          //$conn = mysqli_connect('localhost', 'user', '123', 'cakephp') or die ('Can not connect to mysql');
 
          // $query = mysqli_query($conn, 'select * from users');
          $query = "select * from users";
 
          // Biến result
          $result = array();
 
          if (mysqli_num_rows($query) > 0)
          {
            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
              $result[] = array(
              'username' => $row['username'],
              'email' => $row['email']
              );
            }
          }       
 
          die (json_encode($result));
        }
   }
