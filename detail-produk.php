<?php
error_reporting(0);
include 'db.php';
$kontak = mysqli_query($conn, "SELECT telp, email, address FROM tb_pengguna WHERE id = 1");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($produk);
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
			<h1><a href="index.php">Glamora Beauty Skin</a></h1>
			<ul>
				<li><a href="index.php">Back</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
							Hubungin via Whatsapp
							<img src="img/wa.png" width="50px"></a>
					</p>
					<p>
						<a href="cart.php?act=add&amp;barang_id=<?php echo $p->product_id; ?>&amp;ref=detail-produk.php?id=<?php echo $p->product_id; ?>" class="btn btn-md btn-warning" onclick="konfirmasiDulu()">Beli &raquo;</a>
						&emsp;<a href="detail.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php"><img src="img/polkadot.png" width="70px" style="margin-bottom: -25px" ;></a>
					</p>



					<!-- </b><a href="detail.php"><img src='img/cart.jpg' alt width='20px' style=' padding-right: 10px'></a> -->
				</div>
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
	<script>
		function konfirmasiDulu() {
			alert("Barang sudah masuk keranjang");
		}
	</script>
</body>

</html>

<style>
	body {
		background-image: url(bg9.jpg);
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