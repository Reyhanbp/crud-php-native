<?php
include "cek_login.php";
include "koneksi.php";
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styleindex.css">
  <title>Index</title>
</head>

<body class="body" >
  <div class="container">
    <div class="user">
      <p>DAFTAR USER</p>
      <div>
        <button class="">
          <a href="create.php">Tambah User</a>
        </button>
      </div>
    </div>
    <table width="415" border="1">
      <thead>
        <tr>
          <th width="24">No.</th>
          <th width="85">Username</th>
          <th width="56">Image</th>
          <th width="38">Edit</th>
          <th width="45">Detail</th>
          <th width="45">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = 0;
        $data = mysqli_query($mysqli, "SELECT * FROM user");
        while ($show = mysqli_fetch_array($data)) {
          $nomor++;
          ?>
          <tr>
            <td>
              <?php echo $nomor++ ?>
            </td>
            <td>
              <?php echo $show['username']; ?>
            </td>
            <td hidden >
              <?php echo $show['password']; ?>
            </td>
            <td align="center"><img style="width: 150px; " src="img/<?= $show['img']; ?>"
                        alt="<?= $show['img'] ?>">
                </td>
            <td><a href="update.php?id=<?php echo $show['id']; ?>">Edit</a></td>
            <td><a href="detail_akun.php?id=<?php echo $show['id']; ?>" >Detail</a></td>
            <td><a href="delete.php?id=<?php echo $show['id']; ?>" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Tersebut')" >Delete</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div>
        <button style="position: absolute; bottom: 0; margin-bottom: 20px; width: 100px; margin-left: 15px;">
            <a href="logout.php" style="color: white; text-decoration: none;">LOG OUT</a>
        </button>
    </div>
</body>

</html>