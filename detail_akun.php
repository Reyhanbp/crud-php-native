<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/detail_akun.css">
    <title>Detail Siswa</title>
</head>

<body>
    <?php
    include "koneksi.php";
    $data = mysqli_query($mysqli, "SELECT * FROM user WHERE id='$_GET[id]'");
    while ($show = mysqli_fetch_array($data)) { ?>

        <form>
            <label style="margin-top: 40px;" for="img">Image :</label>
            <img name="img" style="max-width: 200px;" src="img/<?= $show['img'] ?>" alt="img/<?= $show['img'] ?>">

            <label style="margin-top: 10px;" for="username">Username :</label>
            <input type="text" id="username" name="username" value="<?= $show['username'] ?>">

            <label style="margin-top: 10px;" for="id">ID :</label>
            <input type="text" id="id" name="id" value="<?= $show['id'] ?>">

            <label style="margin-top: 10px;" for="password">Password :</label>
            <input type="text" id="password" name="password" value="<?= $show['password'] ?>">

        <?php } ?>
    </form>
    <div>
        <button style="position: absolute; bottom: 0; margin-bottom: 20px; width: 100px; margin-left: 15px;">
            <a href="index.php" style="color: white; text-decoration: none;">Kembali</a>
        </button>
    </div>
</body>

</html>