<?php 
function tinh_gt($n)
{
	if (is_int($n/2)) 
    	$i=2;
	else
    	$i=1;
	$p = 1;
	for (;;)
	{	
    	$p = $p * $i;
        if($i >= $n) break;
        $i = $i +2;
	}
	return $p;
}
echo "gt le = ".tinh_gt(9);  
echo "<br>gt chan = ".tinh_gt(10);
?>