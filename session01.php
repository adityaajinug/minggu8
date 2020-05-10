<?php 
session_start();
if (isset ($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // periksa login
    if($user == "adit" && $pass == "123"){
        // menciptakan Session
        $_SESSION ['login'] = $user;
        // menuju ke halaman pemeriksaan session
        echo "<h1>Anda Berhasil LOGIN</h1>";
        echo "<h2>Klik<a href='session02.php'>Disini (session02.php)</a> Untuk menuju halaman pemeriksaan sesion </h2>";

        
    } 
} else {
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
</head>
<body>
    <form action="" method="post">
        <h2>Login Here....</h2>
        
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="Login">
    </form>
</body>
</html>

<?php } ?>