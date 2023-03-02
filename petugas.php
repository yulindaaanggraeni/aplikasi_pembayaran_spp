<?php 
session_start();
if(empty($_SESSION['id_petugas'])){
	echo"<script>
		alert('Maaf anda belum Login');
		window.location.assign ('../index2.php');
	 	</script>";
}
if($_SESSION['level']!='petugas'){
	echo"<script>
		alert('Maaf anda bukan sesi admin');
		window.Location.assign ('../index2.php');
	 	</script>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Petugas - Aplikasi pembayaran spp</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-5">
		<h3>Aplikasi pembayaran spp</h3>
		<div class="alert alert-info">
			Anda login sebagai Petugas <b><?= $_SESSION ['nama_petugas']?></b>aplikasi pembayaran spp.
		</div>
		<a href="petugas.php" class="btn btn-primary">Petugas</a>
		<a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
		<a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>


		<div class="card mt-2" >
			<div class="card-body">
				<!-- ini sisi web kita -->
				<?php 
					$file = @$_GET['url'];
					if(empty($file)){
						echo "<h4>Selamat datang dihalaman Petugas.</h4>";
						echo "Aplikasi pembayaran spp digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi disekolah";
					}else{
						include $file. '.php';
					}
				 ?>
			</div>
		</div>

	</div>
	<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

















