<?php
function reponse($ret='Continuer Oui(o) ou nom (n):'){
     while(true){
         $rep=readline("$ret".':');
         if($rep=='o'){
            $v='o';
            return $v;
         }
         if($rep=='n'){
            $v='n';
            return $v;
            break;
         }
        
     }
}
/*$ret=reponse('voulez vous continuer?');
var_dump($ret);
function cr($no='veuiller entrer un crenneau'){
    echo $no."  \n";
    $tab=[];
    while(true){
        $ho=(int)readline("Veuiller entrer l' heure d'ouverture :");
        $hf=(int)readline("Veuiller entrer l' heure de fermeture :");
        if(($ho<$hf) && (0<=$ho) && (23>$ho) && (0<=$hf)  && (23>$ho) ){
            $ho=(int)$ho;
            $hf=(int)$hf;
            $table[]=[$ho,$hf];
        }
        else{
        break;
        }
        return [$ho,$hf];
    }
}
/*$l=cr();
$m=cr('veuiller entre vorte creneau:');
var_dump($m,$l);*/





/*function cren($val='vous voulez creer un creneau veuiller entre une?'){

    $tab=[];
    $k=true;
    while($k){
        $rep=reponse('Creer un creneau? ');
        if($rep=='o'){
             $tab[]=cr();
             $k=true;
             return $tab; 
        }
        if($rep=='n'){
              $k=false;
        }
         
    }
    return $tab;  
}
cren();
var_dump($tab);*/



