<?php 
    $value = 'soleh';
    $value2 = 'salman salam';
    setcookie("username", $value);
    setcookie("namalengkap", $value, time()+3600);
    /*expire in 1 hour */
    echo "<h1>Ini Halaman Pengesetan cookie</h1>";
    echo "<h2>Klik <a href='cookie02.php'>Disini</a>Untuk Pemeriksaan Cookies</h2>";
    
    


?>