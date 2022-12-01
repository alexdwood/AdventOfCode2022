<?php
$input = file('./input1.txt');

$elves = array();
$j = 0;
$max = [0,0,0];

foreach($input as $index => $value)
{
	if($value > 0)
	{	
		if(!isset($elves[$j]))
		{
			$elves[$j] = 0 ;
		}
		$elves[$j] += $value; 
	}
	else
	{
		foreach($max as $key=>$value)
		{
			if($elves[$j] > $value)
			{
				$max[$key] = $elves[$j] ;
				break;
			}
		}
		sort($max);
		$j++;
		
	}
}


echo array_sum($max);


?>