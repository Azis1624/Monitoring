<?php 
// koneksi data dari mysql

$konek = mysqli_connect("localhost", "root", "", "dbmonitor");
// baca data tabel dbmonitor
$sql = mysqli_query($konek, "select * from tb_monitor order by id desc");//pembacaan data akan berada di paling atas

//baca data
$data = mysqli_fetch_array($sql);
$pf1 = $data['pf1'];

//uji apabila suhu blom ada maka nilai 0
if($pf1 == "" ) $pf1 = 0;

//cetak nilai suhu 
echo $pf1;

 ?>