<?php 

class siswa_model{
     private $table = 'siswa';
     private $db;


     public function __construct()
     {
          $this->db = new database;
     }


     public function getdataSiswa(){
     $this->db->query('SELECT * FROM ' . $this->table);
     return $this->db->resultSet();
     }


     // =: digunakan untuk menyimpan data yang akan di binding untuk menghindari query injection

     public function getSISWAbyID($id){
          $this->db->query('SELECT * FROM ' . $this->table  . ' WHERE id=:id ');
          $this->db->bind('id', $id);
          return $this->db->single();
     }


     public function tambahDatasiswa($data){
          $query = "INSERT INTO siswa
                              VALUES
          (' ', :nama, :kelas, :jurusan, :email )";

          $this->db->query($query);

          $this->db->bind('nama', $data['nama']);
          $this->db->bind('kelas', $data['kelas']);
          $this->db->bind('jurusan', $data['jurusan']);
          $this->db->bind('email', $data['email']);

          $this->db->execute();

          return $this->db->rowCount();

     }

     public function hapusDatasiswa($id){

          $query = "DELETE FROM siswa WHERE id = :id";
          $this->db->query($query);
          $this->db->bind( 'id', $id);

          $this->db->execute();

          return $this->db->rowCount();

     }

     public function ubahDatasiswa($data){
          $query = "UPDATE siswa SET 
          nama = :nama,
          kelas = :kelas,
          jurusan = :jurusan,
          email = :email
          WHERE id = :id";

          $this->db->query($query);

          $this->db->bind('nama', $data['nama']);
          $this->db->bind('kelas', $data['kelas']);
          $this->db->bind('jurusan', $data['jurusan']);
          $this->db->bind('email', $data['email']);
          $this->db->bind('id', $data['id']);

          $this->db->execute();

          return $this->db->rowCount();

     }

}

?> 