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
      $query=mysqli_query($conn, "SELECT * FROM home");
      while ($outputan=mysqli_fetch_assoc($query) ) {
        echo "$outputan[judul].<br>";
        echo "$outputan[isi].<br><br>";
      }
       ?>

      <h3>Foto saat belajar </h3>
        <p><img src="images/saat belajar.jpg" /></p>
          <h3>memenangkan lomba </h3>
          <p><img src="images/crop juara.gif" /></p>
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
            include("koneksi/koneksi.php");
            if (isset($_POST['login'])) {
              $cek = mysqli_query($conn, "SELECT * FROM loginailc WHERE username = '".$_POST['user']."' AND password = '".$_POST['pass']."' ");
              $hasil = mysqli_fetch_array($cek);
              $count = mysqli_num_rows($cek);
              if ($count > 0) {
                header ("location:admin/admin_home.php");
              } else {
                // code...
                echo "gagal masuk";
              }

            }

          if (isset($_POST['register'])) {
            header("location:daftar.php");
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
          <H4>Ailc course Surabaya</H4>
          <p>Jl.Ampel Kembang 4A Surabaya 60151
            <br />
            Telp : 031 3524854
            <br /> email : sds.bahreis@yahoo.com
          </p>
        </div>




    </div>

</body>
</html>
