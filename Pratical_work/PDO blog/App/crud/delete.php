<?php
namespace App\crud;

use PDO;
use PDOException;

$pdo=new PDO('sqlite:../database/data.db',null,null,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
$error=null;
$success=null;
try{ 
    $query=$pdo->prepare('delete from posts where id= :id');
    $query->execute(
        [
            'id'=>$_GET['id']
        ]
        );
    $success="L'article a été bien supprimé";
} catch(PDOException $e){
    $error=$e->getMessage();
}
require 'elements/header.php';
?>
<?php if($error) :?>
    <div class="note note-danger">
        <?=$error?>
    </div>
<?php else : ?>
<div class="form-inline row container  m-2 p-3 row d-flex justify-content-center rounded-5">
<div class="col-lg-7 p-0 m-0">

<?php if($success) :?>
    <div class="note note-success">
<?=$success?>
<p class="mt-2">
       <a href="/index.php" >Revenir sur nos listes</a>
</p>
<?php endif?>
</div>
</div>
</div>
<?php
endif;
require 'elements/footer.php';
?>