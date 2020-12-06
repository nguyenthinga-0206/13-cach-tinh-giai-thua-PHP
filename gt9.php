<?php
function tinh_gt($n)
{
	$p=1;
    for($i = 0;$i <= $n;)
    {
    	$i++;
        if(!is_int($n/2))
        {
            if(is_int($i/2))
            	continue;
            $p *= $i;
        }
        else
        {
            if(!is_int($i/2))
              	continue; 
            $p *= $i;
        }
    }
    return $p;
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10);
?>