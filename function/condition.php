<?php 
//vérification ouverture/fermeture magasin;

do {
$heure=(int)readline("Veuillez entre l'heure :");
if((8<=$heure&&$heure<=12)||(14<=$heure&&$heure<=18)){
  echo "le magasin est ouvert\n";  
}
else{
    echo "le magasin est fermé\n";
}
}while($heure!=52);
?>