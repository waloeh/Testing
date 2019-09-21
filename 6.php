<?php 

function bilangan($jenis, $N, $array) {
	if ($jenis == 'SUM') {
		$hasil = 0;
			for ($i=0; $i < count($array); $i++) { 
				$hasil += $array[$i];
		}

	}	

	if ($jenis == 'MUL') {
		$hasil = 1;
			for ($i=0; $i < count($array); $i++) { 
				$hasil *= $array[$i];
		}
	}

	if ($jenis == 'SUB') {
		$hasil = $array[0];
			for ($i=1; $i < count($array); $i++) { 
				$hasil -= $array[$i];
		}
	}

	if ($jenis == 'DIV') {
		$hasil = $array[0];
			for ($i=1; $i < count($array); $i++) { 
				$hasil /= $array[$i];
		}
	}


	return $hasil;
}

$result = bilangan('SUM',20,[2,3,4]);
echo $result;
 ?>