<?php
include "koneksi.php";
//Akhir Koneksi

if (isset($_POST['simpan'])) {
    $folder = './img/';
    $img = $_FILES['img']['name'];
    $source = $_FILES['img']['tmp_name'];
    move_uploaded_file($source, $folder . $img);

    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($mysqli, "INSERT INTO user SET username='$user_name', password='$password' , img='$img' ") or die("data salah : " . mysqli_error($mysqli));

    if ($data) {
        echo "Berhasil Input Data";
        echo "<a href='index.php'>lihat</a>";
    } else {
        echo "Gagal Input Data!!!";
        echo "<a href='create.php'>Kembali</a>";
    }
}

?>