<?php
function tinh_gt($n)
{
	$p=1;
    if($n%2!=0)
    {
      for($i = 0; $i <= ($n/2); $i++)  
        $p *= (2 * $i + 1); 
    }
    else 
    {
      for ($i = 1; $i <= ($n/2); $i++)  
        $p *= (2 * $i);
    }
    return $p;
}
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10);
?>