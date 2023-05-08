<?php

session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$error = "Username atau password salah. Silakan coba lagi.";

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($mysqli, $sql);
$show = mysqli_fetch_array($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $show['id'];
    header("Location: index.php");
    
} else {
    echo $error;
}

?>