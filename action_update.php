<?php
include "koneksi.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $folder = './img/';
    $img = $_FILES['img']['name'];
    $source = $_FILES['img']['tmp_name'];
    move_uploaded_file($source, $folder . $img);


    $data = mysqli_query($mysqli, "UPDATE user SET username='$user_name', password='$password' , img='$img' WHERE id='$id'") or die("data salah : " . mysqli_error($mysqli));

    if ($data) {
        echo "Berhasil Update Data <br>";
        echo "<a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal Input Data!!! <br>";
        echo "<a href='index.php'>Kembali</a>";
    }
}
?>