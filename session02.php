<?php 
session_start();
// pemeriksaan session
if (isset($_SESSION['login'])) {
    // menampilkan isi session
    echo "<h1>Selamat Datang". $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika anda sudah login</h2>";
    echo "<h2> Klik <a href='session03.php'> Disini (session03.php)</a> unruk LOGOUT </h2>";
    
} else {
    // session belum ada artinya belum login
    die ("Anda belum Login! Anda tidak berhak masuk ke halaman ini. Silahkan Login <a href='session01.php'>Disini</a>");
}

?>