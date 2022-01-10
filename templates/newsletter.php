<?php 
$error=null;
$success=null;
$email='';

if(!empty($_POST['email'])){
  $email=$_POST['email'];
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $fichier=__DIR__.DIRECTORY_SEPARATOR.'emails'.DIRECTORY_SEPARATOR.date('Y-m-d').'.txt';
    file_put_contents($fichier,$email.PHP_EOL,FILE_APPEND);
    $success="Votre email est bien enregistré";
    $email='';
    
  }
  else{
    $error="Votre email est incorrecte";
  }
}

$title="Newsletter";
require 'header.php';?>

<style>
    body{
        background-color: #808080;
    }
</style>


<div class="container bg-light rounded-5 p-5 ">
<h1>S'incrire aux newsletter</h1>
<p>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo delectus fuga minus tenetur sit modi laboriosam commodi adipisci iusto veritatis laborum eius repellendus exercitationem alias voluptatibus, impedit eveniet dolore explicabo?
</p>



<form action="/newsletter.php" method="POST" class="form-inline my-5 d-flex justify-content-center">
<div class="col-lg-5  ">
<?php if($error) :?>
    <div class="note note-danger text-dark">
        <?=$error?>
    </div>
<?php endif ?>
<?php if($success) : ?>
    <div class="note note-success text-dark">
        <?=$success?>
    </div>
<?php endif ?>
<br>
<input type="text" class="mb-3 form-control" name="email" required placeholder="Entrez votre email" value="<?= htmlentities($email) ?>">
<button  class="btn btn-primary" type="submit">S'incrire</button>
</div>
</form>
</div>



<?php require 'footer.php'; ?>