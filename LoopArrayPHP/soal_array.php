<?php 
error_reporting(0);

$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
$mhs = array("Shelma","Rara","Irma","Dece","Cici","Okky","Hanif","Nadila","Rahma","Prissely","Ilak","Dewi","Aulia","Daffa","Zahra","Ammarul","Nizam","Rafi","Wahyu","Imara","Orin","Nando","Zaskhia","Ayu","Bayu","Iqbal","Kresna","Cahya","Maula","Amalia");
$ipk = array("3.05","3.10","3.15","3.20","3.24");
$rambut = array("Hitam dan Lurus","Hitam dan Keriting");
$bb = array("BB 50kg dan TB 160cm","BB 50kg dan TB 160cm","BB 60kg dan TB 170cm","BB 60kg dan TB 150cm");
$aktif = array("Aktif","Cuti");

echo "<p> === NRP 1 - 5: if else === <p>";
if ($nrp[0] == 4) {
	echo "<p>NRP : $nrp[0]<p>";
	echo "<p>Nama : $mhs[0]<p>";
	echo "<p>IPK : $ipk[0]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>Aktif : $aktif[0]<p>";
	$nrp++;
} 

echo "<p> === NRP 6-10: switch-case === <p>";
$nrp2 = "9";

switch ($nrp2) {
	case "9":
	echo "<p>NRP : $nrp[5]<p>";
	echo "<p>Nama : $mhs[5]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>Aktif : $aktif[0]<p>";
	$nrp2++;
	break;
}

echo "<p> === NRP 11-15: do-while === <p>";
$nrpdo = 12;

do {
	echo "<p>NRP : $nrp[$nrpdo]<p>";
	echo "<p>Nama : $mhs[$nrpdo]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>Aktif : $aktif[0]<p>";
	$nrpdo++;
} while ($nrpdo <= 15);

echo "<p> === NRP 16-20: for-loop === <p>";

for ($nrploop=15;$nrploop<20;$nrploop++){
	echo "<p>NRP : $nrp[$nrploop]<p>";
	echo "<p>Nama : $mhs[$nrploop]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>Aktif : $aktif[0]<p>";

}
echo "<p> === NRP 21-30: while === <p>";
$nrpwhile = 25;
while($nrpwhile <30) {
	echo "<p>NRP : $nrp[$nrpwhile]<p>";
	echo "<p>Nama : $mhs[$nrpwhile]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>Aktif : $aktif[0]<p>";
	$nrpwhile++;
}
?>