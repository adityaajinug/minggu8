<?php
session_start();

// cookie
if(isset($_COOKIE["login"])){
    if($_COOKIE["login"] == 'sukses'){
        $_COOKIE["login"] = true;
    }
}
if(isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "crud_pdo");

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    

   $sql = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' && password ='$password'");
   
   if(mysqli_num_rows($sql) === 1) {

    $direct = mysqli_fetch_assoc($sql);
    
    
    
       
        if ($direct['hak'] =="11"){
            //session admin
            $_SESSION["login"] = true;
            $_SESSION['nama'] = $direct['nama'];
            $_SESSION['hak'] = "11";
            setcookie('login', 'sukses', time()+3600);
            header("location: index.php");
            exit;
        } else if ($direct['hak'] =="1"){
            //session operator
            $_SESSION["login"] = true;
            $_SESSION['nama'] = $direct['nama'];
            $_SESSION['hak'] = "1";
            setcookie('login', 'sukses', time()+3600);
            header("location: operator/index.php");
            exit;
        }
            
        
        

    


   } else {
        echo "<script>
        alert('login gagal');
                </script>";
   }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css" text="text/css">
    <title>Login</title>
</head>
<body>
    
    <div class="container-form">
    <form action="" method="post">
    <h1>Login</h1>
        <label for="username"></label>
            <input type="text" class="input-data" name="username" id="username" placeholder="Username">

        <label for="password"></label>
            <input type="password" class="input-data" name="password" id="password" placeholder="Password">
        <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
        
        
    </form>
    
    </div>
</body>
</html>

