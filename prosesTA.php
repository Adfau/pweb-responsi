<?php
	echo "<head><title>Tugas Akhir</head></title>";

	$tgl = date("Y-m-d");
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	$score = $_POST['score'];

	$fp = fopen("nilai.txt", "a+");
	fputs($fp, "$tgl|$nama|$nim|$email|$score\n");
	fclose($fp);

	echo "Terima Kasih Karena Telah Mengisi Quiz Ini<br>Score Anda: ";
	echo ($score);
	echo "<br><a href=index.html>:: Kembali Ke Quiz ::</a><br>";
	echo "<a href=lihatTA.php>:: Lihat Keseluruhan Nilai ::</a><br>";
?>