<?php 
$erreur='note note-danger';
$msg=null;

$deviner=150;
if(isset($_GET['nombre']) ){
    $value=htmlentities($_GET['nombre']);
}
if(isset($_GET['nombre'])&& $_GET['nombre']!=null){
 if($deviner>$_GET['nombre']){
     $msg="Le nombre saisi est très petit";
     $etat=$erreur;
     
 }
 elseif($deviner<$_GET['nombre']){
    $msg="Le nombre saisi est très grand";
    $etat=$erreur;
 }
 else{
    $msg="Bravo tu as réussi, tu as trouvé le nombre !";
    $etat='note note-success';
 }}



require 'header.php';?>
<main class="container d-flex justify-content-center row g-3 bg-light p-5 rounded">
<form  class="col-9" action="jeux.php" method="GET">
    <input type="number" class="form-control " name="nombre" placeholder="Veuillez saisir le nombre entre 0 et 100" value="<?=$value ?>">
    <br>
    <button class="btn btn-primary" type="submit">Devinez</button>
   
</form>
<div class=" col-9 <?=$etat?>">
        <p><?=$msg?></p>
</div>
</main>

<?php require 'footer.php';?>