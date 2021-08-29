<?php
    include '../koneksi/koneksi.php';
    $delete = mysqli_query($conn, "DELETE  FROM profil where id_profil = '".$_GET['id']."' ");
    if ($delete) {
      header('location:editprofil.php');
      echo "berhasil";
    } else {
          echo 'gagal hapus';
    }

 ?>
