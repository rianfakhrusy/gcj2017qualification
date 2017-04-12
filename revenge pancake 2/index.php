<?php

$handle = fopen("input.txt", "r");

fscanf($handle, "%d", $T);

for ($t = 1; $t <= $T; $t++)
{
	fscanf($handle, "%s %d", $S, $n);
	$a = str_split($S);
	$base = '+';
	$moves = 0;

	for ($x = 0; $x <= count($a)-$n; $x++) {
		if ($a[$x] != $base)
		{
			for($i =0; $i < $n; $i++){
			    $a[$i+$x] = flip($a[$i+$x]);
			}
			$moves++;
		}
		#var_dump($a);
	}

	foreach ($a as $key => $value) {
		if ($value!=$base)
			$moves = "IMPOSSIBLE";
	}
	print "Case #$t: $moves<br>";
}

function flip($c){
	if ($c=='+') return '-';
	return '+';
}

?>