<?php 
$nom=null;
if(!empty($_COOKIE['utilisateur'])){
    $nom=$_COOKIE['utilisateur'];
}
if(!empty($_POST['nom'])){
    setcookie('utilisateur',$_POST['nom']);
    $nom=$_POST['utilisateur'];
}


//détruire un cookie
if(!empty($_GET['action'])&& $_GET['action']==='deconnecter'){
    setcookie('utilisateur','',time()-10);
}


$title="Profil";
require 'header.php';?>



<style>
    body{
        background-color: #808080;
    }
</style>
<div class="container card text-dark rounded-5 p-5 ">
<?php if($nom) :?>
    <h3>Bonjour <?=htmlentities($nom)?></h3>
    <a href="/profil.php?action=deconnecter">Se deconnecter</a>
<p>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo delectus fuga minus tenetur sit modi laboriosam commodi adipisci iusto veritatis laborum eius repellendus exercitationem alias voluptatibus, impedit eveniet dolore explicabo?
</p>
<?php else :?>
<h1>Se connectez</h1>
<p>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo delectus fuga minus tenetur sit modi laboriosam commodi adipisci iusto veritatis laborum eius repellendus exercitationem alias voluptatibus, impedit eveniet dolore explicabo?
</p>
<form action="/profil.php" method="POST" class="form-inline my-5 d-flex justify-content-center">
<div class="col-lg-5 ">
<br>
<input type="text" class="mb-3 form-control"  placeholder="Entrez votre nom" name="nom"  required>
<button  class="btn btn-primary" type="submit">Se connecter</button>
</div>
</form>
<?php endif ?>





</div>

<?php require 'footer.php'; ?>