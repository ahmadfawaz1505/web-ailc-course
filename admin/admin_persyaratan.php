<html>
<head>
  <title> ailc course </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="wrap">

  <div class="menu">
    <ul>
      <li><a href="admin_home.php">Home</a></li>
      <li><a href="admin_profil.php">Profil</a></li>
      <li><a href="admin_persyaratan.php">Syarat dan Persyaratan</a></li>
      <li><a href="admin_kontak.php">Kontak</a></li>
      <li><a href="rubahdata.php">Rubah data</a></li>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </div>

  <div class="content">

    <div class="kiri">
      <form action="" method="post">
        <div>
          <h1> Judul</h1>
          <input type="text" name="judul" class="lg" />
        </div>
        <h2>ISI</h2>
        <div style="margin-top: 10px;">
          <textarea name="isi" rows="8" cols="80"></textarea>
        </div>
        <div style="margin-top: 10px;">
          <input type="submit" name="simpan" value="simpan" class="btn"/>
        </div>
      </form>
      <?php
      include '../koneksi/koneksi.php';
      if (isset($_POST['simpan'])) {
        $query=mysqli_query($conn, "insert into persyaratan values(null, '".$_POST['judul']."',
                                                            '".$_POST['isi']."') ");

        if ($query) {
          echo "berhasil simpan";
        }
        else {
          echo "gagal simpan";
        }
      }

       ?>

    </div>

      </div>

      <div class="footer">
        <div class="footer_kiri">
        <ul><li><a href="../home.php">Home</a></li>
        <li><a href="../profil.php">Profil Sekolah</a></li>
        <li><a href="../persyaratan.php">Syarat & Biaya</a></li>
        <li><a href="../kontak.php">Kontak Kami</a></li>
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


  </div>

</body>
</html>
