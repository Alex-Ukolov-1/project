<?php
header("Content-type:php;charset=UTF-8");
class Sea
{
function revertCharacters($result)
{
	$bb=explode(" ",$result);
	for($i=0;$i<count($bb);$i++)
	{
    $rr=$rr.strrev($bb[$i])." ";
	}
	return ($rr);
}
}
$result=new Sea();
echo $result->revertCharacters("Привет ! давно не виделись .");
?> 