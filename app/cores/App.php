<?php
// Class App

class App{
     protected $controller ='Home';
     protected $method ='index';
     protected $params = [];

     public function __construct() {
          $url = $this->parseURL();

          // controller
          if($url === NULL){
               $url = [$this->controller];
          }
          if( file_exists('../app/controllers/' . $url[0] . '.php')){
               $this->controller = $url[0];
               // unset untuk menghilangkan controller dari array.
               unset($url[0]);

          }
          

          require_once '../app/controllers/' .  $this->controller . '.php';
          $this->controller = new $this->controller;

          // method
          if(isset($url[1])){
               if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                    // var_dump($url);
               }
          }

          // params
          if(!empty($url)){
               $this->params = array_values($url);
               // var_dump($url);
          }

          // Jalankan controller $ method, serta kirimkan params jika ada.
          call_user_func_array([$this->controller, $this->method], $this->params);

     }
     
     public function parseURL(){
          if(isset($_GET['url'])){
               // rtrim untuk menghapus backslash di akhir.
               $url = rtrim( $_GET['url'], '/');
               // filter_var() untuk menghapus karakter aneh dari url
               $url = filter_var($url, FILTER_SANITIZE_URL);
               // Memecah url berdasarkan String dari url
               $url =explode('/', $url);
               return $url;
          }
     }

}

?> 