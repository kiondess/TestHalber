<?php
echo 'IsPrime or not ??'."\n";

?>
<?php
function IsPrime($a)
{
 for($n=2; $n<$a; $n++)
   {
      if($a %$n ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$number = IsPrime(3);
if ($number==0)
echo  '  this is not a Prime Number.'."\n";
else
echo '  this  is a Prime Number.'."\n";
?>