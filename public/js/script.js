$(function() {
     
     $(' .tombolTambahData' ).on('click', function() {
          $('#formModalLabel').html('Tambah Data Siswa');
          $('.modal-footer button[type=submit]').html('Tambah Data');
     });

     $(' .tampilModalubah' ).on('click', function() {
          $('#formModalLabel').html('Ubah Data Siswa');
          $('.modal-footer button[type=submit]').html('Ubah Data');
          $('.modal-body form').attr('action', 'http://localhost:2003/phpMVC/public/siswa/ubah');

     const id = $(this).data('id');

     // ajax
     $.ajax({
          url: 'http://localhost:2003/phpMVC/public/siswa/getUbah',
          data: {id : id},
          method: 'post',
          dataType: 'json',
          success: function(data) {
               $('#nama').val(data.nama);
               $('#kelas').val(data.kelas);
               $('#jurusan').val(data.jurusan);
               $('#email').val(data.email);
               $('#id').val(data.id);
          }
     });

     });


});