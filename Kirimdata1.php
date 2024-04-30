<?php 
// koneksi data dari mysql

$konek = mysqli_connect("localhost", "root", "", "dbmonitor");
// baca data tabel dbmonitor

$voltageA = $_GET['voltageA'];
$frequency1 = $_GET['frequency1'];
$hasil1 = $_GET['hasil1'];
$voltage1 = $_GET['voltage1'];
$power1 = $_GET['power1'];
$current1 = $_GET['current1'];
$energy1 = $_GET['energy1'];
$pf1 = $_GET['pf1'];
$voltageB = $_GET['voltageB'];
$frequency2 = $_GET['frequency2'];
$hasil2 = $_GET['hasil2'];
$voltage2 = $_GET['voltage2'];
$power2 = $_GET['power2'];
$current2 = $_GET['current2'];
$energy2 = $_GET['energy2'];
$pf2 = $_GET['pf2'];
$Temp2 = $_GET['Temp2'];
$Hum2 = $_GET['Hum2'];

//simpan ke mysql pada tbmonitor
mysqli_query($konek, "ALTER TABLE tb_monitor AUTO_INCREMENT=1");
// simpan data ke tbmonitor
$simpan = mysqli_query($konek, "insert into tb_monitor(voltageA, frequency1, hasil1, voltage1, power1, current1, energy1, pf1, voltageB, frequency2, hasil2, voltage2, power2, current2, energy2, pf2, Temp2, Hum2)values('$voltageA', '$frequency1', '$hasil1', '$voltage1', '$power1', '$current1', '$energy1', '$pf1', '$voltageB', '$frequency2', '$hasil2', '$voltage2', '$power2', '$current2', '$energy2', '$pf2', '$Temp2', '$Hum2')");

//respon berhasil terkirim
if ($simpan)
	echo "Berhasil Terkirim";
else
	echo "Gagal Terkirim"

 ?>