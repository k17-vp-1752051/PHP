<?php
    class App{

    //http://localhost/live/home/sayhi/1/2/3
    protected $controller = "home";
    protected $action = "sayhi";
    protected $params;

        function __construct(){
            //Array ( [0] => home [1] => sayhi [2] => 1 [3] => 2 [4] => 3 )
            $arr = $this->UrlProcess();
            
            // xu ly controller

            //ktra co ton tai Home.php k
            if(file_exists("./mvc/controllers/".$arr[0].".php")){//ngat chuoi
                $this->controller = $arr[0];
            }
            require_once "./mvc/controllers/".$this->controller.".php"; // luc nao cung ra man hinh HOME
            
            // xu ly Action(function nao se chay)
            if(isset($arr[1])){
                if(method_exists($this->controller, $arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            //xu ly param
            //neu mang arr co ton tai, thi gan cho mang arr do, ngc lai param rong
            $this->params = $arr?array_values($arr):[];
            // echo "<hr/>";
            // print_r($this->params);
            // echo $this->action;

            //tao bien kieu controller, chay ham sayhi
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function UrlProcess(){
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>