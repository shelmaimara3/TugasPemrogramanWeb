<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$mhs = array("Shelma","Rara","Irma","Dece","Cici","Okky","Hanif","Nadila","Rahma","Prissely","Ilak","Dewi","Aulia","Daffa","Zahra","Ammarul","Nizam","Rafi","Wahyu","Imara","Orin","Nando","Zaskhia","Ayu","Bayu","Iqbal","Kresna","Cahya","Maula","Amalia");asort($mhs);
$dosen =  array("Desy Intan Permatasari");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function TampilHasil($nrp,$mhs,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>user $nrp[$i]<p>";	
	echo "<p>namaMhs :	$mhs[$i]<p>";
	echo "<p>namaKelasMhs : $kelas[0]<p>";
	echo "<p>Dosen wali mahasiswa : $dosen[0]<p>";
	echo "<p>Nilai mata kuliah konsep pemrograman :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif di HIMTI :	$aktif[0]  <p>";
	echo "<hr>";


}
	for ($j=15; $j <30 ; $j++) {
	echo "<p>user $nrp[$j]<p>";	
	echo "<p>namaMhs :	$mhs[$j]<p>";
	echo "<p>namaKelasMhs : $kelas[1]<p>";
	echo "<p>Dosen wali mahasiswa : $dosen[0]<p>";
	echo "<p>Nilai mata kuliah konsep pemrograman :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif di HIMTI :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
TampilHasil($nrp,$mhs,$dosen,$kelas,$nilai,$aktif);


 ?>