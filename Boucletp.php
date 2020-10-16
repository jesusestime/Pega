
<?php

$j=1;/*creneau*/
/*$cr=null;/*creneaux*/
/*$ho=null;/*heure ouverture*//*
$hf=null;
$table=[];
echo "Bonjour Nous sommes lundi,configurer-le:\n";
while($newcre != "N"){
        $newcre=readline("Vous voulez entrer un creneau ?repond par:Oui(O) ou Non(N):");
        if($newcre=='O')
        {
            $ho=readline("Veuiller entrer l'heure de l'ouverture sous format entier:");
            $hf=readline("Veuiller entrer l'heure de fermeture sous format entier:");
            $i=$tab;
            if(($ho<$hf) && (0<$ho) && (24>$ho) && (0<$hf)  && (24>$ho) ){
                $ho=(int)$ho;
                $hf=(int)$hf;
                $table[]=[$ho,$hf];
            }
            else{
                echo "Vous avez mal saisis,le PGM se ferme\n";
                break;
            }
        } 
        else {
            echo "Vous avez mal saisis,le PGM se ferme\n";
        break;  
        }

}


echo "Le magasin est ouvert:\n";
foreach ($table as $k=>$pegasus){
  $k++;
  echo "$k creneau(x)\n" ;
  echo("==============\n");
  echo ("De $pegasus[0] et de $pegasus[1] \n");

}
*/

/*
tp2

$user=(int)readline("Veuiller votre disponibilité de visiter sous format entier:");
foreach($table as $tables){
    if(($ho<=$user)&&($user<=$hf))
    {
      echo "\nle magasin est ouvert";
    break;
    }
    else
    {
        echo "\nLe magasin est ferme";
    break;
    }
}

*/




























/*
tp3
$i=-1;
$table=[];
while($nombres!='fin'){
    $nombres=(int)readline('Entrer le nombre: ');
    $i++;
    if($nombres=='fin'){break;}
    $table[$i]=$nombres;
    print_r($table);
}
foreach ($table as $k)
{
    echo "- $k \n";
}

*/








/*tp 3*/
/*
$chiffre=[
    'Bio'=>['pegasus','sq','jamily','tresor'],
    'Bio2'=>['gatwe','mukwe','tabazi','kanyana','gaspard']
];
foreach($chiffre as $notes=>$section){
    echo "Dans la classe $notes I y a: \n";
    foreach($section as $eleves){
        echo "- $eleves \n";
    }
    echo "\n\n";
}*/
