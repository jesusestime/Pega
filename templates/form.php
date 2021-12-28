<?php 

$total=null;
require 'formfunct.php';
if(isset($_GET['umuceri'])){
    foreach($_GET['umuceri'] as $hj){
        
            
            $total=$total+(int)$umuceri[$hj];
        
    }
}
if(isset($_GET['kurenza'])){
    foreach($_GET['kurenza'] as $hj){
        
            
            $total=$total+$kurenza[$hj];
        
    }
}
if(isset($_GET['umunyu'])){
    foreach($_GET['umunyu'] as $hj){
       
            
            $total=$total+$umunyu[$hj];
       
    }
}
$etat="";
if($_GET!=null){
    $etat="note note-primary";
}
require 'header.php';?>
<main role="main" class="container">
<style>
body{
    background-color: #fff;
}
</style>
<h2>Composer votre plat</h2>
</br>
<form action="/form.php" method="GET">
<div class="form-group">
<h3>Chosisissez la nourriture</h3>
<?=chebox()?>
</br>
<h3>Choississez l'accompagnement</h3>
<?=chebox1()?>
</br>
</br>
<h3>Choississez le plus</h3>
<?=chebox2()?>
</br>
<button type="submit" class="my-5 btn btn-primary">Commander</button>
</form>
</main><!-- /.container -->


<div class="mb-5 container alert-light">
    <div class="container">
        <h3>Au total  vous avez commandé:</h3>
        </br>
        <h4>Votre plat:</h4>
        </br>
        <h5 class=<?=$etat?>><?=plat()?></h5>
        </br>
        <h4>Prix total:</h4>
        </br>
        <h5 class=<?=$etat?>><?= $total ?></h5>
    
    </div>
</div>
<?php require 'footer.php';?>
<footer class=" alert-link bg-info" >Code par pegasus le 17/10/2020</footer>