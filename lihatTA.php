<?php
	echo "<head><title>Tugas Akhir</title></head>";
	$fp = fopen("nilai.txt", "r");
	echo "<h1 align=center>Tabel Nilai</h1>";
	echo "<p align=center><a href=index.html>:: Kembali Ke Quiz ::</a>&nbsp;<hr></p>";
	echo "<table align=center border=1 cellspacing=2 cellpadding=2>";

	echo "<tr><td width=10%>Tanggal</td><td width=30%>Nama</td><td width=25%>NIM</td><td width=20%>Email</td><td width=15%>Nilai</td></tr>";
	while($isi = fgets($fp)) {
		$pisah = explode("|", $isi);
		echo "<tr>";
		echo "<td width=10%>$pisah[0]</td>";
		echo "<td width=30%>$pisah[1]</td>";
		echo "<td width=25%>$pisah[2]</td>";
		echo "<td width=20%>$pisah[3]</td>";
		echo "<td width=15%>$pisah[4]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>