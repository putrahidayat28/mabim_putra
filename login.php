<?php
session_start();
// email data dari form
$username = $_POST['Username'];
$password = $_POST['Password']; 
// data login contoh (nanti bisa dari dat base)
$user_benar = "admin";
$pass_benar = "040306"; 
// validasi
if($username == $user_benar && $password == $pass_benar){
    $_SESSION['Login'] = true;
    $_SESSION['Username'] = $username;
    header("Location: dashboard.php");  
    exit;
} else {
    echo "<script>
    alert('Login Gagal: Username atau Password salah');
    window.location.href = 'index.php';
    </script>";
}
?>