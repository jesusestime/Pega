<?php 

$title="Nous contactez";
require 'header.php';
require_once 'function.php';
//this is for htmlcren(array $crene):string
date_default_timezone_set("Africa/Bujumbura");
$jour=(int)date("N");
$couleur="note note-danger";
//this is for function in_creneaux(int $heure,array $crene):bool
$heure=(int)date("G");
$creneaux_today=CREN[$jour-1];
$ouverture=in_creneaux($heure,$creneaux_today);
//this is for to verify if si la magasin est ouvert ou fermé formulaire
$jour1=(int)($_GET["jour"] ?? date("N"));
$heure1=(int)($_GET["heure"] ?? (int)date("G"));
$creneaux_verification=CREN[$jour1];
$verification=in_creneaux($heure1,$creneaux_verification);
?>

<main class="container bg-light p-5">
<h1>Nous Contactez</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga tempora minus excepturi tempore laudantium dicta aspernatur, accusamus, voluptatum suscipit non laboriosam dolore! Eaque expedita a ipsam repellat delectus nemo?</p>

<br>
<h3>Vérifier si le temps d'ouverture de notre site Web sera disponible</h3>
<div class="conatiner m-3 p-3">
<?php if($verification==true) :$couleur="note note-success"?>
<div class="note note-success">
  <p> Le magasin sera ouvert</p>
</div>
<?php else : ?>
<div class="note note-danger">
  <p>le magasin sera fermé</p>
</div>
<?php endif ?>
</div>
<form action="" method="GET" class="container mb-3">
<div class="mb-3">
   <label for="" class="form-label ">Jour</label>
   <select  class="form-select" name="jour" id="jour">
     <?php foreach(JOURS as $i=>$j) :?>
     <option value="<?=$i?>" <?=select($jour1,$i)?>><?=$j?></option>
     <?php endforeach ?>
   </select>
 </div>

<div class="mb-3">
   <label for="" class="form-label">Heure</label>
   <input type="number" class="form-control" name="heure" value="<?=$heure1?>">
 </div>
 <button  class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
</form>



<br class="mt-3">
<h3>Heures d'ouverture de notre site Web</h3>
<?php if($ouverture==true) :$couleur="note note-success"?>
<div class="note note-success">
  <p>Pour le moment le magasin est ouvert</p>
</div>
<?php else : ?>
<div class="note note-danger">
  <p>Pour le moment le magasin est fermé</p>
</div>
<?php endif ?>

<ul class="m-0 p-0">
    <strong><?php foreach (JOURS as $i=>$j){ echo '<br>'.JOURS[$i].'<br> '?></strong>
   <li>
     <?php if(($i+1)==$jour){
       
       $htmlcren=htmlcren(CREN[$i]);
       echo 
      '<p class= "'.$couleur.'">'.$htmlcren.'</p>';
     }
     else{
        echo htmlcren(CREN[$i]);
     };?>
   </li>
   <strong><?php } ?></strong>
 </ul>
</main>


<?php require 'footer.php'; ?>