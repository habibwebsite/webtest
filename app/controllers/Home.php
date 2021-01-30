<?php 

class Home extends Controller{
     public function Index(){
          $data['header']= "Home";

          $data['nama'] = $this->model('user_model')->getUser();

          // memanggil method view dari cores/Controller.php
          $this->view('templates/header' ,$data);
          $this->view('home/index', $data);
          $this->view('templates/footer');
     }
}


?> 