<?php 
function gt($n)
{
	$gt=1;
	for ($i=$n; $i>=1; $i--)   
	{  
	  $gt = $gt * $i;  
	}  
	return $gt;
}
function tinh_gt($n)
{
	if ($n%2==0) 
		return (pow(2,$n/2)*gt($n/2));	
	else 
	{		
		return (gt($n+1))/(pow(2,$n/2+1/2)*(gt(($n+1)/2)));
	}
} 
echo "gt le = ".tinh_gt(9); 
echo "<br>gt chan = ".tinh_gt(10); 
?> 
