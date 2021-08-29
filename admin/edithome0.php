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

      <li><a href="?rubahdata.php">Rubah data</a></li>
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
      while ($row = mysqli_fetch_array($query)) {
        // code...

       ?>
       <tr>
         <td><?php echo $row['id_home'] ?></td>
         <td><?php echo $row['judul'] ?></td>
         <td><?php echo $row['isi'] ?></td>
         <td>
              <a href="read_home.php?id=<?php echo $row['id_home']; ?>">EDIT</a> |
              <a href="deletehome.php?id=<?php echo $row['id_home'] ?>">HAPUS</a>
         </td>
       </tr>
     <?php } ?>


    </div>



  </div>
</div>
</body>
</html>
