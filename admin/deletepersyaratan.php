<?php
    include '../koneksi/koneksi.php';
    $delete = mysqli_query($conn, "DELETE  FROM persyaratan where id_persyaratan = '".$_GET['id']."' ");
    if ($delete) {
      header('location:editpersyaratan.php');
      echo "berhasil";
    } else {
          echo 'gagal hapus';
    }

 ?>
