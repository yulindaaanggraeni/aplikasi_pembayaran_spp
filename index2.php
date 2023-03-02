<!doctype html>
<html lang="en">
  <head>
  	<title>Login Petugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Petugas</h3>
						<form action="proses_login_petugas.php" class="login-form" method="post">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Masukan Username anda...." required>
		      		</div>
	            <div class="form-group d-flex">
	             <input type="password" name="password" class="form-control" placeholder="Masukan Password anda...." required>
	            </div>
	           
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary">LOGIN</button><br>
	            	<a href="index.php">Login Ke Siswa</a>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

