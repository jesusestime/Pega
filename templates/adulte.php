<?php 
$age=null;
if(!empty($_POST['birthday'])){
    setcookie('age',$_POST['birthday']);
    $_COOKIE['age']=$_POST['birthday'];
}
if(!empty($_COOKIE['age'])){
    $birth=$_COOKIE['age'];
    $age=(int)date('Y')-$birth;
}




$title="Adult_page";
require 'header.php';?>


<style>
    body{
        background-color: #808080;
    }
</style>


<div class="container card text-dark rounded-5 p-5 ">
<?php if( $age >= 18) :?>
    <h3>Contenus réserveés aux adultes</h3>
</div>
<?php elseif($age !== null) :?>
    <h2>Attention</h2>
    <div class="note note-danger">Vous n'avez pas l'âge de voir le contenu</div>
<?php else : ?>

<h1>Vérification age</h1>
<p>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo delectus fuga minus tenetur sit modi laboriosam commodi adipisci iusto veritatis laborum eius repellendus exercitationem alias voluptatibus, impedit eveniet dolore explicabo?
</p>
<form action="/adulte.php" method="POST" class="form-inline my-2 d-flex justify-content-center">
<div class="col-lg-6 ">
<br>
<label for="birthday" class="select-label">Section réservé aux adultes, Entrez votre année de naissance :</label>
<select class="select-form mb-2 form-control" name="birthday" id="birthday">
<?php for($i=2010;$i>1919;$i--):?>
<option value="<?=$i?>"><?=$i?></option>
<?php endfor ?>
</select>
<button  class="btn btn-primary" type="submit">Envoyer</button>
</div>
</form>
</div>
<?php endif ?>
<?php require 'footer.php'; ?>