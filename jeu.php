<?php 
$deviner=152;
$value=null;
$success=null;
$erreur=null;
if(isset($_POST['chiffre'])&&($_POST['chiffre']!='')){
    $k=$_POST['chiffre'];
    if($k>$deviner){
    $success='Chiffre trop grand';
    }
    elseif($k<$deviner){
        $success='Chiffre trop petit';
    }
    else{
        $erreur="Bravo! vous avez trouvé le chiffre est  $deviner";}
    $value=$k;
}
require 'header.php';?>
<?php if($success):?>
    <div class="container">
    <div class="alert alert-danger">
    <?=$success?>
     </div>
    </div>
<?php elseif($erreur):?>
    <div class="container">
    <div class="alert alert-success">      
       
     <?=$erreur?>
     </div>
        </div>
<?php endif ?>
</div>
<main role="main" class="container">
<form action="/jeu.php" method="POST">
<div class="form-group">
<input type="number" class="form-control " name=chiffre placeholder="Entre entre 1 a 1000" value="<?=htmlentities( $k )?>">
</div>
<div class="form-group">
<button class="btn btn-warning" type="submit">Deviner</button>
</div>

</form>
</main><!-- /.container -->
<?php require 'footer.php' ?>