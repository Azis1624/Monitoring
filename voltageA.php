<?php 
// koneksi data dari mysql

$konek = mysqli_connect("localhost", "root", "", "dbmonitor");
// baca data tabel dbmonitor
$sql = mysqli_query($konek, "select * from tb_monitor order by id desc");//pembacaan data akan berada di paling atas

//baca data
$data = mysqli_fetch_array($sql);
$voltageA = $data['voltageA'];

//uji apabila suhu blom ada maka nilai 0
if($voltageA == "" ) $voltageA = 0;

//cetak nilai suhu 
echo $voltageA;

 ?>