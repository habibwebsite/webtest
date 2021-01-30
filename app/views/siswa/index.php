<div class="container mt-5">

<!-- flash message -->
<div class="row">
<div class="col-lg-6">
     <?php flasher::flash(); ?> 
</div>
</div>

<div class="row">
<div class="col-lg-6">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahData mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
     Tambah Data Siswa
</button>
</div>
</div>

<div class="row">
<div class="col-lg-6">
     <!-- Modal -->
     <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
     <div class="modal-dialog">
     <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form action="<?= BASEURL;?>/siswa/tambah" method="POST">

          <input type="hidden" name="id" id="id"> 

               <div class="mb-3">
     <label for="nama" class="form-label">Nama</label>
     <input type="text" class="form-control"  name="nama" id="nama">
     </div>

          <div class="mb-3">
     <label for="kelas" class="form-label">Kelas</label>
     <input type="text" class="form-control" id="kelas" name="kelas">
     </div>

     <div class="mb-3">
          <label for="jurusan" name="jurusan">Jurusan</label>
     <select class="form-select" id="jurusan" name="jurusan">
          <option value="jurusan">---</option>
     <option value="RPL">RPL</option>
     <option value="IPA">IPA</option>
     <option value="IPS">IPS</option>
     </select>
     </div>

     <div class="mb-3">
     <label for="email" class="form-label">Email</label>
     <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
     </div>

          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
          </div>
     </div>
     </div>
     </div>

<h3>Daftar Siswa</h3>

<?php foreach ($data['ssw'] as $siswa) : ?> 

     <ul class="list-group">
     <li class="list-group-item"><?= $siswa['nama'];?>
     <a href="<?= BASEURL;?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge bg-danger float-end me-1" onclick="return confirm('yakin?'); ">Delete</a>
     <a href="<?= BASEURL;?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge bg-warning float-end tampilModalubah me-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$siswa['id']; ?>">Edit</a>
     <a href="<?= BASEURL;?>/siswa/detail/<?= $siswa['id']; ?>" class="badge bg-primary float-end me-1">Detail</a>
     </li>
     </ul>


<?php endforeach; ?> 


</div>
</div>

</div>