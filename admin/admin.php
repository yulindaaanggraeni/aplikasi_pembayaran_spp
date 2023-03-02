<?php 
session_start();
if(empty($_SESSION['id_petugas'])){
	echo"<script>
		alert('Maaf anda belum Login');
		window.location.assign ('../index2.php');
	 	</script>";
}
if($_SESSION['level']!='admin'){
	echo"<script>
		alert('Maaf anda bukan sesi admin');
		window.Location.assign ('../index2.php');
	 	</script>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN - Aplikasi pembayaran spp</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
	<div class="container mt-5">
		<h3>Aplikasi pembayaran spp</h3>
		<div class="alert alert-info">
			Anda login sebagai <b>ADMINISTRATOR</b>aplikasi pembayaran spp.
		</div>
		<a href="admin.php" class="btn btn-primary">Administrator</a>
		<a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
		<a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
		<a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
		<a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
		<a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
		<a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
		<a href="admin.php?url=logout" class="btn btn-primary">Logout</a>
		<div class="card mt-2" >
			<div class="card-body">
				<!-- ini sisi web kita -->
				<?php 
					$file = @$_GET['url'];
					if(empty($file)){
						echo "<h4>Selamat datang dihalaman Administrator.</h4>";
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
