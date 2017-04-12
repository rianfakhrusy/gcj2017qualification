<?php

$handle = fopen("input.txt", "r");

fscanf($handle, "%d", $T);
for ($t = 1; $t <= $T; $t++)
{
	fscanf($handle, "%s", $S);

	$count = strlen($S);
	$ans;
	if ($count!=1){
	    for ($i = $count-1; $i > 0; $i--) {
	        if ($S[$i - 1] > $S[$i]) {
        		$S[$i - 1] = $S[$i - 1] - 1;
        		for ($idx = $i; $idx < $count; $idx++) {
					$S[$idx] = 9;
				}
        		/*
	        	} else {
	        		$idx = $i-2;
	        		while ($S[$idx]!=0)
	        			$idx--;
	        		$S[$idx] = $S[$idx]-1;
					$i=$idx;
					for ($i = $idx+1; $i < $count; $i++) {
						$S[$i] = 9;
					}
	        	}*/
	        }
	    }
		if ($S[0]=='0')
			$S = substr($S,1);
	}
	print "Case #$t: $S<br>";
}




/*
for ($t = 1; $t <= $T; $t++)
{
	fscanf($handle, "%s", $S);

	$found = false;

	while (!$found){
		$a = str_split($S);
		if (isSorted($a, true)&&count($a)>1){
			$a[0] = $a[0]-1;
			for ($i = 1; $i < count($a); $i++) {
				$a[$i] = 9;
			}
			if ($a[0]==0)
				$a = array_slice($a,1);
			$S = implode($a);
		}
		if (isSorted($a, false))
			$found = true;
		else
			$S=gmp_sub($S,1);
		#print $S;
		#print "\n";
	}
	print "Case #$t: $S<br>";
}

function compare($lhs, $rhs, $descendingOrder)
{
    $result = 0;
    if ($lhs < $rhs) {
        $result = -1;
    } else if ($lhs > $rhs) {
        $result = 1;
    }

    if ($descendingOrder) {
        $result *= -1;
    }

    return $result;
}

function isSorted(array $arr, $descendingOrder)
{
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        if (compare($arr[$i - 1], $arr[$i], $descendingOrder) > 0) {
            return false;
        }
    }
    return true;
}
*/
?>