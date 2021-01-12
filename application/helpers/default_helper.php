 <?php 
function rp($value)
{
	$val = number_format($value,2,".",",");
	return (doubleval($value)!=0?$val:0);
}


?>