<?php
function tinh_gt($n)
{
	$p=1;
    for($i = 0;;)
    {
    	if($i >= $n) break;
        if(!is_int($n/2))
            $p *= ($i + 1);
        else
            $p *= ($i + 2);
        $i = $i +2;
    }
    return $p;
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10);
?>