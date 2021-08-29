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





  <div class="inputan">

    <div class="box-form">
      <div class="form-title">
        Halaman Buat Akun
      </div>
      <div class="form-isi">
        <form action="" method="post">
          Nama Lengkap <br>
          <input type="text" name="nama_lengkap" placeholder="nama lengkap"><br/>
          Username <br>
          <input type="text" name="username"  placeholder="username"><br/>
          Password <br>
          <input type="password" name="password" placeholder="password"><br/>

          <input type="submit" name="register" value="register">

        </form>
      </div>
      <?php
        include 'koneksi/koneksi.php';
      if (isset($_POST['register'])) {
        $query=mysqli_query($conn, "insert into loginailc values(null, '".$_POST['nama_lengkap']."',
                                                                    '".$_POST['username']."',
                                                                    '".$_POST['password']."'
                                                                       )");
            if ($query) {
            header ("location:home.php");
              echo "berhasil simpan";
            }else{
              echo "gagal simpan";
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
    <p><strong>Visi Sekolah</strong><br /></p>
    Unggul Dalam Prestasi Berdasarkan Imtaq dan Iptek, Berakhlaqul karimah, Terampil Dan Mandiri.</p>
    <p><strong>Misi Sekolah</strong></p>
    <ol>
    <li>Mengembankan sumber daya secara optimal dalam rangka mempersiapkan di era global</li>
    <li>Menengembangkan spiritual emosional dan intelektual siswa secara menyeluruh</li>

    </div>

    <div class="footer_kanan">
    <H4>SD Bahreisy Surabaya</H4>
    <p>Jl.Ampel Kembang 4A Surabaya 60151
      <br />
      Telp : 031 3524854
      <br /> email : sds.bahreisy@gmail.com
    </p>
  </div>


</div>
