<html>
<head>
  <title> ailc course </title>

  <link rel="stylesheet" href="style.css">
</head>
<?php
  include("koneksi/koneksi.php");
 ?>
<body>
<div class="wrap">
  <div class="header">
    <img src="images/ailc profil.jpg" />
  </div>

  <div class="menu">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="persyaratan.php">Syarat dan Persyaratan</a></li>
      <li><a href="kontak.php">Kontak</a></li>
    </ul>
  </div>



  <div class="content">
    <div class="kiri">
      <?php
      $query=mysqli_query($conn, "SELECT * FROM kontak");
      while ($outputan=mysqli_fetch_assoc($query) ) {
        echo "$outputan[judul].<br>";
        echo "$outputan[isi].<br><br>";
      }
       ?>

      <h2>Kontak kami</h2>
  		<form action="" method="get">
      		<table><tr>
      		<td>nama		<td>:</td></td><td><input placeholder=username size="25" name="k_nama" required /></td>
      		</tr>

      		<tr>
      		<td>Email		<td>:</td></td><td><input placeholder=Email size="25" name="k_email" required/></td>
      		</tr>

      		<tr>
      		<td>Subject		<td>:</td></td><td><input type="text" size="25" name="k_subject" /></td>
      		</tr>

      		<tr>
      		<td>Message		<td>:</td></td><td><textarea rows="8" cols="30" style="resize:none;" name="k_message"></textarea></td>
      		</tr>

      		<tr>
      		<td><input type="submit" value="Simpan" name="savekontak" /></td>
      		</tr>
      		</table>
  		</form>
    </div>


  <div class="kanan">
        <div class="judul">
        Halaman Login
        </div>
        <div class="inputan">
        <form action="" method="post">
          <div>
            <input type="text" name="user" placeholder="Username" class="lg" />
          </div>
            <div style="margin-top: 10px;">
            <input type="password" name="pass" placeholder="Password" class="lg" />
            </div>

          <div style="margin-top: 10px;">
            <input type="submit" name="login" value="login" class="btn"/>
              <input type="submit" name="register" value="register" class="btn"/>
          </div>

        </form>
        </div>

        <?php

        if (isset($_POST['login'])) {
            include("koneksi/koneksi.php");
          $cek = mysqli_query($conn, "SELECT * FROM loginailc WHERE username = '".$_POST['user']."' AND password = '".$_POST['pass']."' ");
          $hasil = mysqli_fetch_array($cek);
          $count = mysqli_num_rows($cek);
          if ($count > 0) {
            header ("location:admin/admin_kontak.php");
          } else {
            // code...
            echo "gagal masuk";
          }

        }
         ?>
    </div>
  </div>
  <div class="footer">
    <div class="footer_kiri">
    <ul><li><a href="home.php">Home</a></li>
    <li><a href="profil.php">Profil Sekolah</a></li>
    <li><a href="persyaratan.php">Syarat & Biaya</a></li>
    <li><a href="kontak.php">Kontak Kami</a></li>
  </ul>
    </div>

    <div class="footer_tengah">
    <p><strong>Visi Ailc</strong><br /></p>
    Unggul Dalam Prestasi Berdasarkan Imtaq dan Iptek, Berakhlaqul karimah, Terampil Dan Mandiri.</p>
    <p><strong>Misi Ailc</strong></p>
    <ol>
    <li>Mengembankan sumber daya secara optimal dalam rangka mempersiapkan di era global</li>
    <li>Menengembangkan spiritual emosional dan intelektual siswa secara menyeluruh</li>

    </div>

    <div class="footer_kanan">
    <H4>Ailc Course Surabaya</H4>
    <p>Jl.Petukangan Tengah Surabaya 60151
      <br />
      Telp : 031 3524854
      <br /> email : ailccourse@yahoo.com
    </p>
  </div>

  </div>


</body>
</html>
