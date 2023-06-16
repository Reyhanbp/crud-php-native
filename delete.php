<?php
include('koneksi.php');

global $mysqli;
$id = $_GET['id'];

global $id;

$sql = "DELETE FROM user WHERE id = ?";
if ($stmt = mysqli_prepare($mysqli, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = $id;

    $sql = "SELECT * FROM user WHERE id = ?";
    if ($prepare = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($prepare, "i", $param_id);
        mysqli_stmt_execute($prepare);
        $result = mysqli_stmt_get_result($prepare);
        if (mysqli_num_rows($result) == 1) {
            $delete = mysqli_fetch_array($result);
            $del_img = unlink("img/$delete[img]");
            echo "Berhasil Hapus Data <br>";
            echo "<a href='index.php'>Kembali</a>";
        } else {
            header("location: error");
            exit();
        }
        if (mysqli_stmt_execute($stmt) && ($del_img)) {
            return true;
        } else {
            return false;
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($prepare);
}

?>
