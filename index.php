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

<body>
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
          <th width="56">Password</th>
          <th width="56">Image</th>
          <th width="38">Edit</th>
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
              <?php echo $show['id']; ?>
            </td>
            <td>
              <?php echo $show['username']; ?>
            </td>
            <td>
              <?php echo $show['password']; ?>
            </td>
            <td align="center"><img style="width: 150px; " src="img/<?= $show['img']; ?>"
                        alt="<?= $show['img'] ?>">
                </td>
            <td><a href="update.php?id=<?php echo $show['id']; ?>">edit</a></td>
            <td><a href="delete.php?id=<?php echo $show['id']; ?>" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Tersebut')" >delete</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div>
        <button style="position: absolute; bottom: 0; margin-bottom: 20px; width: 100px; margin-left: 15px;">
            <a href="logout.php" style="color: red; text-decoration: none;">LOG OUT</a>
        </button>
    </div>
</body>

</html>