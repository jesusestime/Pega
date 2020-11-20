<?php 
$t=[];
$t=$_GET;
$total=0;
require 'formfunct.php';
if(isset($_GET['umuceri'])){
    foreach($_GET['umuceri'] as $hj){
        if(isset($hj)){
            $prix=$umuceri[$hj];
            $t[]=$umuceri[$hj];
            $total=$total+(int)$umuceri[$hj];
        }
    }
}
if(isset($_GET['kurenza'])){
    foreach($_GET['kurenza'] as $hj){
        if(isset($hj)){
            $prix=$kurenza[$hj];
            $t[]=$kurenza[$hj];
            $total=$total+$kurenza[$hj];
        }
    }
}
if(isset($_GET['umunyu'])){
    foreach($_GET['umunyu'] as $hj){
        if(isset($hj)){
            $prix=$umunyu[$hj];
            $t[]=$umunyu[$hj];
            $total=$total+0.000;
            $total=$total+$umunyu[$hj];
        }
    }
}
require 'header.php';?>
<main role="main" class="container">
<style>
body{
    background-color: #DDD;
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
<button type="submit" class="btn btn-primary">Commander</button>
</form>
</main><!-- /.container -->
<div class="jumbotron alert-light">
    <div class="container">
        <h3>Au total  vous avez commandé:</h3>
        </br>
        <h4>Votre plat:</h4>
        </br>
        <h5 class="alert alert-info"><?=plat()?></h5>
        </br>
        <h4>Prix total:</h4>
        </br>
        <h5 class="alert alert-info"><?= $total ?></h5>
    
    </div>
</div>
<footer class=" alert-link bg-primary" >Code par pegasus le 17/10/2020</footer>