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
      $query=mysqli_query($conn, "SELECT * FROM persyaratan");
      while ($outputan=mysqli_fetch_assoc($query) ) {
        echo "$outputan[judul].<br>";
        echo "$outputan[isi].<br><br>";
      }
       ?>
  <div class="pendaftaran">
    <h2>Pendaftaran Online</h2>
    <form action="" method="post">
      Nama Siswa <br>
      <input type="text" name="nama" value="" placeholder="Hasyim Maskur"><br>
      Tgl/Bln/Thn lahir  <br>
      <input type="text" name="kelahiran" value="" placeholder="2002/08/17"><br>
      Alamat Siswa <br>
      <input type="text" name="alamat" value=""><br>
      Nama Wali <br>
      <input type="text" name="nama_wali" value=""><br>
      Alamat Wali <br>
      <input type="text" name="alamat_wali" value=""><br>
      No. telepon Wali <br>
      <input type="text" name="kontak" value=""><br><br>

      <input type="submit" name="save" value="simpan" style="height:30px;">
    </form>

  </div>

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
              header ("location:admin/admin_profil.php");
            } else {
              // code...
              echo "gagal masuk";
            }

          }
           ?>

    </div>
        <?php
        include("koneksi/koneksi.php");
        if (isset($_POST['save'])){
        $query = mysqli_query($conn, "insert into daftar values(null, '".$_POST['nama']."',
                                                                      '".$_POST['kelahiran']."',
                                                                      '".$_POST['alamat']."',
                                                                      '".$_POST['nama_wali']."',
                                                                      '".$_POST['alamat_wali']."',
                                                                      '".$_POST['kontak']."'
                                                                         )");
        if ($query) {
        header ("location:persyaratan.php");
        echo "berhasil simpan";
        }else{
        echo "gagal simpan";
        }
        }
         ?>
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
    <p>Jl.Petukangan Tengah no 4A Surabaya 60151
      <br />
      Telp : 031 3524854
      <br /> email : ailccouse@yahoo.com
    </p>
  </div>



</div>

</body>
</html>
