<?php
 $kurenza=[
    'sauci'=>1,
    'pilipili'=>0.5
];
$umuceri=[
    'Haricot'=>3,
    'Viande'=>4,
    'Legumes'=>2 ];
    $umunyu=[
        'umunyu'=>2,
        'magi'=>1
    ];
$tab=[];
function chebox(){
    $umuceri=[
        'Haricot'=>3,
        'Viande'=>4,
        'Legumes'=>2 ];
    foreach($umuceri as $k =>$s){
    echo  <<<PEG
    <input type="checkbox" name="umuceri[]" value=$k >  $k <p> $s euro(s)</p>
PEG;   
    } 
}
function chebox1(){
    $umunyu=[
        'umunyu'=>2,
        'magi'=>1
    ];
    foreach($umunyu as $k =>$s){
    echo  <<<PEG
    <input type="radio" name="umunyu[]" value=$k>  $k <p> $s euro(s)</p>
PEG;   
    } 
}
function chebox2(){
    $kurenza=[
        'sauci'=>1,
        'pilipili'=>0.5
    ];
    foreach($kurenza as $k =>$s){
    echo  <<<PEG
    <input type="checkbox" name="kurenza[]" value=$k>  $k <p> $s euro(s)</p>
PEG; 
    }
}
function plat(){
 $j=[];
 foreach($_GET as $l=>$m){
     foreach($m as $o){
        echo <<<LOP
        <li>$o</li>
LOP;
     }
 }
}