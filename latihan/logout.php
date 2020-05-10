<?php 
// mengaktifkan session
session_start();
session_unset();

// menghapus semua session
session_destroy();

// hapus cookie
setcookie('login', '', time()-3600);
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:login.php?p=logout");
exit;
?>