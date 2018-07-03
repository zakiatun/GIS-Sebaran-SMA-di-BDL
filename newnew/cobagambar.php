<?php
session_start();
include "koneksi.php";
$db=mysqli_connect("localhost","root","","blogapp");
$sql= "SELECT * FROM posts ORDER BY id DESC";
$result= mysqli_query($db, $sql);

if(!isset($_SESSION['username'])){
  echo "
  <script>
  alert('Harus login dulu ya');
  window.location= 'login.php';
  </script>
  ";
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard Admin</title>
    <link href="style/index.css" rel="stylesheet">
  </head>
  <body style="background-color: #333538; color:white;">
    <ul>
      <li><a href="index.php?p=home">Home</a></li>
      <li><a href="index.php?p=resep">Resep</a></li>
      <?php
        if(!isset($_SESSION['username']))
          echo "<li> <a href='login.php'>Login</a></li>";
        else {
          echo "<li> <a href='logout.php'>Logout</a></li>";
          echo "<li> <a class=\"active\" href='index.php?p=admin'>Admin</a></li>";
        }
      ?>
      </ul>
    <h1 style="font-family: 'Kaushan Script', cursive; font-size: 40px;background:#2196F3; color:white; margin:0px; padding:70px 50px 50px 50px">
      <center>Dashboard Admin</center></h1><br>
    <div class="artikel" style="padding: 20px 0px;margin-top:30px;height:1000px;">
    <!-- Pengisian artikel -->
    <form action="post.php" method="post" enctype="multipart/form-data">
      <div>
        <h4>Judul Artikel</h4>
        <input type="text" name="judul" required>
      </div>
      <div>
        <h4>Upload gambar:</h4>
        <input type="file" name="gambar"><br>
      </div>
      <div>
        <h4>Isi artikel:</h4>
         <textarea name="teks" rows="8" cols="80" placeholder="Isi artikel..." required></textarea><br>
      </div>
      <div>
        <h4>Nama Penulis:</h4>
        <input type="text" name="penulis">
      </div>
      <div>
        <br><input type="submit" value="POST"></button>
      </div>
    </form>
    <br>
    <hr style="width:100%; background-color:#666666; color::#666666; height:1px; border:none;">
    <br>

    <div class="admin">
      <h2>-Riwayat Posting-</h2>
    <!-- TAMPILAN CRUD POSTING -->
      <table border-collapse="collapse" style="border: 2px solid #f3c30f ; background-color:white; color:black; margin:20px;">
        <thead>
          <tr>
            <th>NOMOR</th>
            <th>JUDUL</th>
            <th>GAMBAR</th>
            <th>TEKS</th>
            <th>PENULIS</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1;?>
          <?php while($row=mysqli_fetch_assoc($result)){ ?>
              <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row['judul'];?></td>
                <td><?php echo $row['gambar'];?></td>
                <td style="width:50%;"><?php echo substr($row["teks"],0,250)?>...</td>
                <td><?php echo $row['penulis'];?></td>
                <td><a href="edit.php?id=<?php echo $row['id'];?>">EDIT</a>
                  <a>  ||  </a>
                <a href="hapus-post.php?id=<?php echo $row['id'];?>">HAPUS</a></td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
    </div>
   <div class="footer">
     <center>
       <hr style="width:50%; background-color:#666666; color::#666666; height:1px; border:none;">
       <p>&copy; 2018. All rights reserved.
       Designed and developed by<br>
       Yeni Rosandi<a style="color:#fbb448;"> 1617051034 </a>Maya Akhriza<a style="color:#fbb448;"> 1617051017 </a>Adelia Nada Effendi<a style="color:#fbb448;"> 1617051072</p>
     </center>
   

  </body>
</html>