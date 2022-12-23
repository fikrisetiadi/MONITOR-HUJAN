

<?php 
	include('config.php');

	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("H:i:s");
	$tanggal = date("d F Y");
	$hujan = $_GET ['hujan']; 


$koneksi = mysqli_connect('localhost', 'root', '', 'gis');
 
$kirim = mysqli_query($koneksi, "INSERT INTO tb_monitor (waktu,tanggal,hujan) VALUES ('$waktu','$tanggal','$hujan')");
	if ($kirim) {
		echo "Data berhasil diinputkan...!";
	} else {
		echo "Gagal di inputkan...!";
	}
	

 ?>
