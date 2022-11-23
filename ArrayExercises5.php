<h3>A PHP script to separate odd and even integers in separate arrays. </h3> 
<?php
    $arr = array(25,47,42,56,32);
    $odd = array();
    $even = array();
    
    echo "Number of elements in the array: \n";
    $s = count($arr);
    
    for ($n = 0; $n < $s; $n++) 
    {
        echo "$arr[$n] ";
    }
    $x = 0;
    $y = 0;
    for ($n = 0; $n < $s; $n++) 
    {
        if ($arr[$n] % 2 == 0) 
        {
            $even[$x] = $arr[$n];
            $x++;
        } 
        else 
        {
            $odd[$y] = $arr[$n];
            $y++;
        }
    }
    echo "<br>The Even elements are : <br>";
    
    for ($n = 0; $n < $x; $n++) 
    {
        echo $even[$n]. " ";
    }
    echo "<br>The Odd elements are : <br>";
    
    for ($n = 0; $n < $y; $n++) 
    {
        echo $odd[$n] . " ";
    }
?>