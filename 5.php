<?php 
function beliTelor($tanggal, $uang) {
	$bilanganPrima = [2,3,5,7,11,13,17,19,23,29,31];
	$jmlTelor =floor($uang / 2500);

	//ketika membeli tanggal prima
	$tanggalBeli = in_array($tanggal, $bilanganPrima);
	$lusin = floor($jmlTelor/12);

	if ($tanggalBeli == 1) {
		$bonusTelor = $lusin*2;
		$plusBonus = $bonusTelor+ $jmlTelor;
	}

	//ketika membeli tanggal ganjil bukan prima
	if ($tanggalBeli != 1 && $tanggal%2==1) {
		$bonusTelor = $lusin*3;
		$plusBonus = $bonusTelor + $jmlTelor;
	}

	//pada tanggal kelipatan 5 jika bonusTelor == bil. genap maka bonus x 10 jika ganjil x 5
	if ($tanggal%5 == 0 && $bonusTelor%2 == 0) {
		$plusBonus = $bonusTelor*10 + $jmlTelor;
	}
	else if ($tanggal%5 == 0 && $bonusTelor%2 == 1) {
		$plusBonus = $bonusTelor*5 + $jmlTelor;
	}

	return $plusBonus;
}

$hasil = beliTelor(13, 60000);
echo "Telor yang diperoleh Luna => ".$hasil." butir";

 ?>