<?php
date_default_timezone_set("Africa/Bujumbura");
function directory_views(): void{
    $fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur';
    $fichier_date = $fichier.'-'.date('Y-m-d');
    add_views($fichier);
    add_views($fichier_date);
}  
function add_views(string $fichier): void{
    $count=1;
    if(file_exists($fichier)){
        $count=(int)file_get_contents($fichier);
        $count++;
    }
    file_put_contents($fichier,$count);
}

function read_views():string{
    $fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur';
    return file_get_contents($fichier);
}

//dashboard functions

 function vues_mois(int $m,int $a):int{
    $month = str_pad($m,2,'0',STR_PAD_LEFT);
    $fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur-'.$a.'-'.$month.'-*';
    $fichier=(glob($fichier));
    $total=0;
    foreach($fichier as $fichiers){
        $total += file_get_contents($fichiers);
    }
    return $total;
 }

 function vues_details_mois(int $m,int $a) :array{
    $month = str_pad($m,2,'0',STR_PAD_LEFT);
    $fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur-'.$a.'-'.$month.'-*';
    $fichier=(glob($fichier));
    $visites=[];
    foreach($fichier as $fichiers){
        
        $part=explode('-',basename($fichiers));
        $visites=[
            'annee' => $part[1],
            'mois'=> $part[2],
            'jour' => $part [3],
            'vues' => file_get_contents($fichiers)
        ];
    }
    return ($visites);
 }

?>