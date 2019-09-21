<?php 
echo "<br>";
function check($dataKey, $word) {
	$jmlData = count($dataKey);
	
	for ($i=0; $i < $jmlData; $i++) { 
		$str = '';
		$jmlSuku = strlen($dataKey[$i]);
			echo substr($word, $i, $jmlSuku)."<br>";
	}
	echo "<br>";
}

check(['ha','di','mul','yana'], 'hadi');

 ?>