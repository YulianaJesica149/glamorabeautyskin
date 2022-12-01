<?php
session_start();
	include "db.php";
    error_reporting (E_ALL ^ E_NOTICE);
    $q = mysqli_query($conn,"SELECT * from tb_pembelian where id_user='".$_SESSION['id_pelanggan']."'");
?>



<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamora | Riwayat Belanja</title>
    <link rel="stylesheet" href="css/style.css">
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
    <div class="riwayat"> 
    <h1>Riwayat Pembelian</h1>
	<hr>
	<table class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Order</th>
				<th>Tanggal Pembelian</th>
				<th>Total Pembelian</th>
				<th>Status</th>
			</tr>
		</thead>
        <tbody>
        <?php 
            $no = 1;
            while($data=mysqli_fetch_object($q)){ ?>
			<tr>
				<th><?php echo $no++; ?></th>
				<td><?php echo $data->kode_order?></td>
				<td><?php echo $data->tanggal_pembelian?></td>
				<td><?php echo $data->total_pembelian ?></td>
				<td><?php echo $data->status ?></td>
			</tr>
            <?php } ?>
		</tbody>
	</table>
    </div>
</body>
</html>


<style>
body{
    background-image: url(bg6.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
header {
	background-color: #bc8ac2;
	color: #fff;
}
.btn {
	padding:8px 15px;
	background-color: #bc8ac2;
	color: #fff;
	border:none;
	cursor: pointer;
}
</style>