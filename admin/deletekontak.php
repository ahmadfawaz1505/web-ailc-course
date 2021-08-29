<?php
    include '../koneksi/koneksi.php';
    $delete = mysqli_query($conn, "DELETE  FROM kontak where id_kontak = '".$_GET['id']."' ");
    if ($delete) {
      header('location:editkontak.php');
      echo "berhasil";
    } else {
          echo 'gagal hapus';
    }

 ?>
