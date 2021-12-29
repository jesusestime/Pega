<?php
define("JOURS",["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]);
define("CREN",
[
    [[8,12],[14,19]],
    [[8,9],[14,18]],
    [[14,19]],
    [[8,12]],
    [[8,12],[14,19]],
    [],
    [],
]);


function htmlcren(array $crene):string{
    if(empty($crene)){
        return 'Fermé';
    }
    $tab=[];
    foreach ($crene as $cr){
        $tab[]='de <strong>'.$cr[0].'heures </strong>  à <strong> '.$cr[1].' heures </strong>';
    };
    $solution = implode(" et ",$tab);
    return $solution;

}
