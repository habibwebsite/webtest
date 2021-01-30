<?php

class About extends Controller{
     public function Index($nama="Habib Ritonga", $umur="17 Tahun"){

          $data['nama'] = $nama;
          $data['umur'] = $umur;
          $data['header']= "About";

          $this->view('templates/header' ,$data);
          $this->view('about/index', $data);
          $this->view('templates/footer');
}

public function Page(){
     $data['header']="Page";

     $this->view('templates/header' ,$data);
     $this->view('about/page');
     $this->view('templates/footer');
}
}

?> 