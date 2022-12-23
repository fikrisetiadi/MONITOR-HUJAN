<?php
session_start();
include 'config.php'; // masukan konekasi DB
// ambil variable ID dari URL
//Proses query hapus data
$del=mysqli_query($config,"TRUNCATE TABLE tb_monitor");
$sql =mysqli_query($config,"INSERT INTO tb_monitor (id, waktu, tanggal, hujan)
VALUES ('0', '00:00:00', '00/00/0000', '0')");

header("location:report.php"); // kembali ke tampil data
?>