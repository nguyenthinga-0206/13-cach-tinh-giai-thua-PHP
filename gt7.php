<?php
function tinh_gt($n)
{
    $p=1;
    if(!is_int($n/2))
    {
        for($i = 0;$i <= $n;)
        {
        	$i++;
            if($i % 2 == 0) 
            	continue;
            $p *= $i;
        }
    }
    else
    {
        for($i = 0;$i <= $n;)
        {
        	$i++;
            if($i % 2 != 0) 
            	continue;
            $p *= $i;
        }
    }
    return $p;
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10);
?>