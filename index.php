<?php
include 'db.php';
// $kontak = mysqli_query($conn, "SELECT telp, email, address FROM tb_pengguna WHERE id_user = 1");
// $a = mysqli_fetch_object($kontak);
?>
<?php
session_start();
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Glamora Beauty Skin</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Eagle+Lake&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Glamora Beauty Skin</a></h1>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="detail.php">Cart</a></li>
				<li><a href="riwayat.php">Riwayat</a></li>
				<li><a href="keluar.php">Logout</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h4>Welcome,<?php echo $_SESSION['a_global']->username ?></h4><br>
			<br>
			<h3>Kategori</h3>
			<div class="box">
				<?php
				$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
				if (mysqli_num_rows($kategori) > 0) {
					while ($k = mysqli_fetch_array($kategori)) {
				?>
						<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
							<div class="col-5">
								<img src="img/gambar.png" width="50px" style="margin-bottom:5px;">
								<p><?php echo $k['category_name'] ?></p>
							</div>
						</a>
					<?php }
				} else { ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk Terbaru</h3>
			<div class="box">
				<?php
				$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
				if (mysqli_num_rows($produk) > 0) {
					while ($p = mysqli_fetch_array($produk)) {
				?>
						<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
							<div class="col-4">
								<img src="produk/<?php echo $p['product_image'] ?>">
								<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
								<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
							</div>
						</a>
					<?php }
				} else { ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p>Jl. Yos Sudarso I No.03, Sangatta Utara, Kabupaten Kutai Timur</p>

			<h4>Email</h4>
			<p>glamorabeautyskin@gmail.com</p>

			<h4>No. Hp</h4>
			<p>085389310659</p>
			<small>Copyright &copy; 2021 Glamora Beauty Skin</small>
		</div>
	</div>
</body>

</html>


<style>
	body {
		background-image: url(bg10.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}

	.box {
		background-color: #fff;
		border: 1px solid #ccc;
		padding: 15px;
		box-sizing: border-box;
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

	.search input[type=submit] {
		padding: 12px 15px;
		background-color: #bc8ac2;
		color: #fff;
		border: none;
		cursor: pointer;
	}

	.col-4:hover {
		color: #bc8ac2;
		box-shadow: 0 0 3px #bc8ac2;
	}
</style>