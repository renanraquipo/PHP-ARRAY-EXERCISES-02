<h3> A PHP script to count the frequency of each element of an array. </h3>
<?php

$arr = array (25,12,43);
$af= array_fill(0, count($arr), 0);
$check = -1;

echo("Input 3 elements in the array: <br> ");
for($x = 0; $x < count($arr); $x++)
{
	$key=$arr[$x];
	$count = 1;
		for($y = $x+1; $y < count($arr); $y++)
		{
			if($arr[$x] == $arr[$y])
			{
				$count++;	
				$af[$y] = $check;
			}
		}
		if($af[$x] != $check)
		$af[$x] =$count;
        echo "element - [".$x."]"." : ".$key. "<br>";
}


echo ("<br>The frequency of all elements of an array : <br>" );
for( $x = 0; $x < count($af); $x++)
{
	if($af[$x] != $check)
	{
	echo( $arr[$x] ." occurs " );
	echo( $af[$x]." times.");
	echo("<br>");
	}
}

?>