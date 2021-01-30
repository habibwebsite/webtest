<?php 

class siswa extends Controller{
     public function index(){

          $data['header'] = 'Daftar Siswa';

          $data['ssw'] = $this->model('siswa_model')->getdataSiswa();

          $this->view('templates/header', $data);
          $this->view('siswa/index', $data);
          $this->view('templates/footer');

     }

     public function detail($id){

          $data['header'] = 'Detail Siswa';

          $data['ssw'] = $this->model('siswa_model')->getSISWAbyID($id);

          $this->view('templates/header', $data);
          $this->view('siswa/detail', $data);
          $this->view('templates/footer');

     }

     public function tambah(){
          if($this->model('siswa_model')->tambahDatasiswa($_POST) > 0){
               flasher::setFlash('berhasil', 'ditambahkan', 'success');
               header("Location:".BASEURL.'/siswa' );
               exit;
          }else {
               flasher::setFlash('gagal', 'ditambahkan', 'danger');
               header("Location:".BASEURL.'/siswa' );
               exit;
          }
     }


     public function hapus($id){
          if($this->model('siswa_model')->hapusDatasiswa($id) > 0){
               flasher::setFlash('berhasil', 'dihapus', 'success');
               header("Location:".BASEURL.'/siswa' );
               exit;
          }else {
               flasher::setFlash('gagal', 'dihapus', 'danger');
               header("Location:".BASEURL.'/siswa' );
               exit;
          }
     }

     public function getUbah(){

          echo json_encode($this->model('siswa_model')->getSISWAbyID($_POST['id']));

     }

     public function ubah(){
          if($this->model('siswa_model')->ubahDatasiswa($_POST) > 0){
               flasher::setFlash('berhasil', 'diubah', 'success');
               header("Location:". BASEURL .'/siswa' );
               exit;
          }else {
               flasher::setFlash('gagal', 'diubah', 'danger');
               header("Location:". BASEURL .'/siswa' );
               exit;
          }
     }

     public function cari(){
          $data['header'] = 'Daftar Siswa';

          $data['ssw'] = $this->model('siswa_model')->cariDataSiswa();

          $this->view('templates/header', $data);
          $this->view('siswa/index', $data);
          $this->view('templates/footer');


     }

}

?> 