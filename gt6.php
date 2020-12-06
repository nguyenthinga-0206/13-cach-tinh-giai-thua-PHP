<?php
function tinh_gt($n)
{
	$p=1;
    for($i = 1;$i <= $n;)
    {
        if($n%2 != 0)
        {
            $p *= $i;
        }
        else
        {
        	$p *= ($i + 1);            
        }
        $i = $i + 2;
    }
    return $p;
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10);
?>