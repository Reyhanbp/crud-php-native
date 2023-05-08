<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/stylecreate.css">

    <title>Update</title>
</head>

<body>
	<?php
	include "koneksi.php";
	$data = mysqli_query($mysqli, "SELECT * FROM user WHERE id='$_GET[id]'");
	$datashow = mysqli_fetch_array($data);
	?>
	<form action="action_update.php" method="post" enctype="multipart/form-data">
		<div class="container">
			<div>
				<p>UPDATE DATA USER</p>
			</div>
			<div>
			<input type="hidden" name="id" value="<?php echo $datashow['id']; ?>">
		</div>
		<div>
			<label for="">
				Username :
			</label>
			<input type="text" name="username" value="<?php echo $datashow['username']; ?>"> <br>
		</div>
		<div>
			<label for="">
				Password :
			</label>
			<input type="text" name="password" value="<?php echo $datashow['password']; ?>"> <br>
		</div>
		<div>
			<label for="">
				Image :
			</label>
			<input type="file" name="img" value="<?php echo $datashow['img']; ?>"> <br>
		</div>
		<input type="submit" name="update" value="Update">
	</div>
	</form>
</body>

</html>