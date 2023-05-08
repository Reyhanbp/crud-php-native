<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylecreate.css">
    <title>Form Tambah Data</title>
</head>

<body>
    <form action="action_create.php" method="post" enctype="multipart/form-data">
        <div class="container">
        <?php include "koneksi.php"; ?>
            <div>
                <h3>TAMBAH DATA USER</h3>
            </div>
            <div>
                <label for="">
                    Username :
                </label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="">
                    Password :
                </label>
                <input type="text" name="password" required>
            </div>
            <div>
                <label for="">
                    Image :
                </label>
                <input type="file" value="Pilih" name="img" required>
            </div>
            <br>
            <div class="submit">
                <input type="submit" name="simpan" value="SIMPAN">
            </div>
           
        </div>
    </form>
 
</body>
</html>