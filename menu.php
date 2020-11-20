<?php
/*
<li class="nav-item <?php if($_SERVER['SCRIPT_NAME']=='/index.php'){echo "active";} ?>">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
*/
function navbar(string $nom,string $lien):string
{
  $class='nav-item';
  if($_SERVER['SCRIPT_NAME']==$lien)
  {
    $class=$class.' active';
  }
  return <<<HTML
  <li class="$class">
        <a class="nav-link" href="$lien">$nom</a>
  </li>
HTML;
}?>
<ul class="navbar-nav mr-auto">
      <?= navbar('Accueil','/index.php')?>
      <?= navbar('Contact','/contact.php')?>
</ul>