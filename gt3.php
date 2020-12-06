<?php 
function tinh_gt($n)
{
	if (is_int($n/2)) 
    	$i=2;
	else
    	$i=1;
	$p = 1;
	for (; $i <= $n;$i+=2 )
	{	
		$p = $p * $i;		
	}
	return $p;
}
echo "gt le = ".tinh_gt(9);  
echo "<br>gt chan = ".tinh_gt(10);
?>