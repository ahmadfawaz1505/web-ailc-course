<?php
include '../koneksi/koneksi.php';
$ambil=$_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM profil where id_profil = '$ambil' ");
$r = mysqli_fetch_array($data);
$judul = $r['judul'];
$isi = $r['isi'];
 ?>

<html>
<head>
  <title> ailc course </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="wrap">

  <div class="menu">
    <ul>
      <li><a href="rubahdata.php">Rubah data</a></li>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </div>

  <div class="content">

    <div class="kiri">
      <form action="" method="post">
        <div>
            <h1> Judul</h1>
            <input type="text" name="judul" value="<?php echo $judul ?>" class="lg" />
        </div>
            <h2>ISI</h2>
        <div style="margin-top: 10px;">
            <textarea name="isi" rows="8" cols="80"><?php echo $isi ?></textarea>
        </div>
        <div style="margin-top: 10px;">
            <input type="submit" name="simpan" value="simpan" class="btn"/>
        </div>
      </form>
      <?php

      if (isset($_POST['simpan'])) {
        $query=mysqli_query($conn, "UPDATE profil SET judul= '".$_POST['judul']."',
                                                      isi= '".$_POST['isi']."'
                                                      WHERE id_profil = '$ambil' ") ;


        if ($query) {
          echo "berhasil simpan";
        }
        else {
          echo "gagal simpan";
        }
      }

       ?>

    </div>

      <div class="kanan">
      </div>

  </div>

</body>
</html>
