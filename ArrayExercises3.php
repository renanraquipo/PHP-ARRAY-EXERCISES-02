<!DOCTYPE html>
<html>
<body>

<?php
$arrChar=array(5, 1, 1);

    $arrL=count($arrChar);
    $elCount=array();
  for($x=0;$x<$arrL;$x++)
    {
       $num=$arrChar[$x];
      if($elCount[$num]>=1)
       {
          $elCount[$num]++;
       } else  {
          $elCount[$num]=1;
       }
       
       print("element - "."[".$x."]"." : "."[".$num."]<br>");

   }

   
   echo "Total number of duplicate elements found in the array is : $num";
?>

</body>
</html>