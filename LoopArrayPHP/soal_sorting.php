<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$mhsasc = array("Shelma","Rara","Irma","Dece","Cici","Okky","Hanif","Nadila","Rahma","Prissely","Ilak","Dewi","Aulia","Daffa","Zahra","Ammarul","Nizam","Rafi","Wahyu","Imara","Orin","Nando","Zaskhia","Ayu","Bayu","Iqbal","Kresna","Cahya","Maula","Amalia");asort($mhsasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$mhsdesc= array("Shelma","Rara","Irma","Dece","Cici","Okky","Hanif","Nadila","Rahma","Prissely","Ilak","Dewi","Aulia","Daffa","Zahra","Ammarul","Nizam","Rafi","Wahyu","Imara","Orin","Nando","Zaskhia","Ayu","Bayu","Iqbal","Kresna","Cahya","Maula","Amalia");rsort($mhsdesc);

echo "<p> ===================================== Nama Sort Ascending ================================================ <p>";

function dataMhsasc($nrpasc,$mhsasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $mhsasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$mhsasc);
echo "<p>==================================== NRP Sort Descending ================================================== <p>";

function dataMhsDesc($nrpdesc,$mhsdesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $mhsdesc[$i]<p>";
	echo "<hr>";
	
	}
}
dataMhsasc($nrpdesc,$mhsdesc);

 ?>