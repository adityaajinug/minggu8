<?php 
session_start();
if (isset($_SESSION['login'])){
    unset ($_SESSION);
    session_destroy();
    // 
    echo "<h1>Anda Sudah Berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session01.php'>Disini</a>Untuk LOGIN Kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session02.php'>session02.php</a>Lagi</h2>";

}

?>