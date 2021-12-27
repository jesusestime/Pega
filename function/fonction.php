<?php
/*
<li class="nav-item <?php if($_SERVER['SCRIPT_NAME']=='/index.php'){echo "active";} ?>">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
*/
require_once('function/date.php');
function navbar1(string $nom,string $lien):string
{
  $class='nav-item bg-danger ';
  if($_SERVER['SCRIPT_NAME']==$lien)
  {
    $class=$class.' active';
  }
  return <<<HTML
  <li class="$class">
        <a class="nav-link text-big"  href="$lien">$nom</a>
  </li>
HTML;
}
function cren(array $j){
  $d=null;
  $f=null;
  $tab=[];
  foreach($j as $k){
    $d=$k[0];
    $f=$k[1];
    
  }
  $tab=implode(" et de ",$tab); 
  return $tab;
}
/*$j=<<<GH
    <strong>
    $d  heures </strong> à
<strong>$f heures</strong>
GH;*/