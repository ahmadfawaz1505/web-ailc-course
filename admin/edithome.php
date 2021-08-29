<?php
include '../koneksi/koneksi.php';
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
  </table>
  <div class="kiri">
    <table border="1">
      <tr>
        <td>No</td>
        <td>Judul</td>
        <td>Isi</td>
        <td>Pilihan</td>
      </tr>
      <?php
      $query= mysqli_query($conn, "SELECT * FROM home");
      $angka=1;
      while ($row = mysqli_fetch_array($query)) {
        // code...

       ?>
       <tr>
         <td><?php echo $angka++; ?></td>
         <td><?php echo $row['judul'] ?></td>
         <td><?php echo $row['isi'] ?></td>
         <td style="width:90px;">
              <a href="read_home.php?id=<?php echo $row['id_home']; ?>">Edit</a> |
              <a href="deletehome.php?id=<?php echo $row['id_home'] ?>">Hapus</a>
         </td>
       </tr>
     <?php } ?>


     </table>

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
