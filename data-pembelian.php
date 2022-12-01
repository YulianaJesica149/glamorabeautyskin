<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
<header>
		<div class="container">
			<h1><a href="dashboard.php">Glamora Beauty Skin</a></h1>
			<ul>
				<li><a href="dashboard.php">Back</a></li>
			</ul>
		</div>
	</header>
    <center>
    <?php
        require 'db.php';
        echo "
        <br><h1>Data Pemesanan</h1><br>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Id User</th>
                <th>Kode Order</th>
                <th>Tanggal Pembelian</th>
                <th>Total Pembelian</th>
                <th>Status</th>";
            $qry = mysqli_query($conn, "SELECT id_user, kode_order, tanggal_pembelian, total_pembelian, status FROM tb_pembelian ORDER BY id_pembelian Asc"); 
            $no = 1;
            while ($data=mysqli_fetch_array($qry)){
                echo "<tr>
                        <td>$no</td>
                        <td>$data[id_user]</td>
                        <td>$data[kode_order]</td>
                        <td>$data[tanggal_pembelian]</td>
                        <td>$data[total_pembelian]</td>
                        <td>$data[status]</td>
                    </tr>";
                $no++;
            }
        echo "</table>";
    ?>
    </center>
</body>
</html>

<style>
body{
    background-image: url(bg1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
.box {
	background-color: rgba(255, 255, 255, 0.10);
	border-image:none;
	box-sizing: border-box;
	padding:15px;
	margin:10px 0 25px 0;
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