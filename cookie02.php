<?php 
if(isset($_COOKIE['username'])){
    echo "<h1>Cookie 'username' ada. Isinya :".
    $_COOKIE['username'];
} else {
    echo "<h1> Cookie 'username' TIDAK ada. </h1>";
}
if(isset($_COOKIE['namalengkap'])){
    echo "<h1>Cookie 'namalengkap' ada. Isinya :".
    $_COOKIE['namalengkap'];
}else{
    echo "<h1> Cookie 'namalengkap' TIDAK ada. </h1>";
}
echo "<h2>Klik <a href='cookie01.php'>Disini</a> Untuk Penciptaan Cookies</h2>";
echo "<h2>Klik <a href='cookie03.php'>Disini</a> Untuk Penghapusan Cookies</h2>";


?>