<?php
   echo " Q1.............................................. ";

$sum=0;
for ($i=0; $i <=30 ; $i++) { 
   $sum+=$i;
}
echo $sum;
   echo " <br>Q4.............................................. <br>";
for ($i=1; $i <= 5; $i++) { 
    for ($j=1; $j <=5 ; $j++) { 
       if ($i==$j) {
     echo $i ." ";
       }else{
        echo "0"." ";
       }
      
    }
    echo "<br>";
}
   echo " <br>Q5.............................................. <br>";
$factorial=5;
$fact=1;
for ($i=1; $i <=$factorial ; $i++) { 
  $fact*=$i;
}
echo $fact;
   echo " <br>Q6.............................................. <br>";

$fibseq=[0,1];
for ($i=1; $i < 10; $i++) { 
for ($j=$i-1; $j <$i ; $j++) { 
$summ= $fibseq[$j]+$fibseq[$i];
array_push($fibseq,$summ);
}
}
print_r( $fibseq);
 
   echo " <br>Q9.............................................. <br>";
    $patrin=0;
for ($i=0; $i < 5; $i++) {  
for ($j=-1; $j <$i ; $j++) { 
    $patrin++;
    echo $patrin ." ";
}

echo "<br>";
}
?>