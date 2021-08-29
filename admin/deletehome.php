<?php
    include '../koneksi/koneksi.php';
    $delete = mysqli_query($conn, "DELETE  FROM home where id_home = '".$_GET['id']."' ");
    if ($delete) {
      header('location:edithome.php');
      echo "berhasil";
    } else {
          echo 'gagal hapus';
    }

 ?>
