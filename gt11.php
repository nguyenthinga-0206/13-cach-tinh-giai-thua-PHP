<?php
function tinh_gt($n)
{
	$p=1;
    for($i=$n%2+2;;$i+=2)
    {
    	$p *= $i;
    	if($i >= $n) break;
    }
    return $p;
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10);
?>