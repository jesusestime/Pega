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

 function views_per_month(int $month,int $year) {
    $month = str_pad($month,2,'0',STR_PAD_LEFT);
    $fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur-'.$year.'-'.$month;
    var_dump($fichier);
    exit();
 }

?>