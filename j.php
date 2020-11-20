<?php
$a=[];
$b=[];
$n=readline('Definir le nbre de fractions:');
for($i=0;$i<$n;$i++){
    $a[]=readline('entrer le num:');
    $b[]=readline('entre le demo:');
}
$A=[];
$S=0;
$B=0;
$i=0;
for($i=0;$i<$n;$i++){
    $B=$B*$b[$i];
    $A[$i]=$a[$i];
    $j=0;
    for($j=0;$j<$n;$j++)
    {
        if($j!=$i){
            $A[$i]=$A[$i]*$b[$j];
        }
    }
    $S=$S+$A[$i];
}
print_r($S);
print_r($B);
