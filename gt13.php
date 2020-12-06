<?php
function tinh($n)
{
	$p=1;
    for($i = 0;;)
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
        if($i >= $n) break;
    }
    return $p;
}
echo "gt le = ".tinh(9); 
echo "<br>gt chan = ".tinh(10);
?>