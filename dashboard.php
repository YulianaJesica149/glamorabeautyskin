<?php
session_start();
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Glamora Beauty Skin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">Glamora Beauty Skin</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="data-pembelian.php">Data Pembelian</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->username ?> Di Glamora Beauty Skin</h4>
			</div>
		</div>
	</div>
	<!-- Jumbotron -->
	<section class="jumbotron text-center">

		<!-- <h1 class="display-4">Selamat Datang Admin!</h1> -->
		<!--  -->
		<!-- <p class="lead">Dashboard Glamora Beauty Skin.</p> -->
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#bc8ac2" fill-opacity="0.8" d="M0,96L60,101.3C120,107,240,117,360,101.3C480,85,600,43,720,42.7C840,43,960,85,1080,101.3C1200,117,1320,107,1380,101.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
		</svg>
	</section>
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 Glamora Beauty Skin.</small>
		</div>
	</footer>
</body>

</html>

<style>
	body {
		background-image: url(bg1.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}

	.box {
		background-color: rgba(255, 255, 255, 0.10);
		border-image: none;
		box-sizing: border-box;
		padding: 15px;
		margin: 10px 0 25px 0;
	}

	header {
		background-color: #bc8ac2;
		color: #fff;
	}

	.btn {
		padding: 8px 15px;
		background-color: #bc8ac2;
		color: #fff;
		border: none;
		cursor: pointer;
	}
</style>