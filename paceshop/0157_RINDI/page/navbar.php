<?php
session_start();
if (isset ($_SESSION['username'])){
  if ($_SESSION['status'] == 'user'){
    $user = $_SESSION['username'];
    $title = $_SESSION['status'];

    echo "<li><a href='?page=beranda'>Beranda</a></li>";
    echo "<li><a href='?page=laporan'>laporan</a></li>";
    echo "<li><a href='?page=belanja'>Pesanan</a></li>";
    echo "<li><a href='?page=belanja'>Pesanan</a></li>";
    echo "<li><a href='?page=laporan_pelanggan'>laporan_pelanggan</a></li>";
    echo "<li><a href='?page=bulanan'>bulanan</a></li>";
    echo "<li><a href='?page=harian'>harian</a></li>";
    echo "<li><a href='?page=tahunan'>tahunan</a></li>";
    echo "<li class='logout'><a href='page/logout.php'>keluar</a></li>";
    echo "<li class='login'><a><b>Hey, </b>$title $user</a></li>";

  } elseif ($_SESSION['status'] == 'admin') {
    $user = $_SESSION['username'];
    $title = $_SESSION['status'];

    echo "<li><a href='?page=beranda'>Beranda</a></li>";
    echo "<li><a href='?page=laporan_stok'>laporan_stok</a></li>";
    echo "<li><a href='?page=barang'>Barang</a></li>";
    echo "<li><a href='?page=transaksi'>Transaksi</a></li>";
    echo "<li><a href='?page=user'>User</a></li>";
    echo "<li><a href='?page=profilad'>Profil</a></li>";
    echo "<li class='logout'><a href='page/logout.php'>keluar</a></li>";
    echo "<li class='login'><a><b>Hey, </b>$title $user</a></li>";
  }
} else {
  echo "<li><a href='?page=beranda'>Beranda</a></li>";
  echo "<li><a href='?page=laporan'>laporan</a></li>";
  echo "<li><a href='?page=laporan_harian'>laporan_harian</a></li>";
  echo "<li><a href='?page=laporan_pelanggan'>laporan_pelanggan</a></li>";
  echo "<li><a href='?page=bulanan'>bulanan</a></li>";
  echo "<li><a href='?page=tahunan'>tahunan</a></li>";


  echo "<li><a href='?page=tentang'>Tentang</a></li>";
  echo "<li class='login'><a href='page/login.php'>Masuk</a></li>";
}
 ?>
