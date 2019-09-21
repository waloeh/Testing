<?php 
echo "<br>";
function garis($kata) {
	$jml = strlen($kata);
	

	for ($i=0; $i < $jml; $i++) { 
		$angka = substr($kata, $i,1);
		for ($j=0; $j < $i; $j++) { 
			echo " &nbsp; ";
		}
		echo $angka. " <br>";
	}
	
}

echo garis('testing');
 ?>