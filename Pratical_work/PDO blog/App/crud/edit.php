<?php 
namespace App\crud;

use PDO;
use PDOException;

$pdo=new PDO('sqlite:../database/data.db',null,null,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
$error=null;
$success=null;
try{
    //update posts
    if(isset($_POST['name'],$_POST['content'])){
        $query=$pdo->prepare('UPDATE posts set name=:name,content=:content where id=:id');
        $query->execute(
            [
                'name'=>$_POST['name'],
                'content'=>$_POST['content'],
                'id'=>$_GET['id']
            ]
            );
        $success="Votre article a bien été modifié";
    }
    //displays post one and his values
    $query=$pdo->prepare('select *  from posts where id= :id');
    $query->execute(
        [
            'id'=>$_GET['id']
        ]
        );
    $posts=$query->fetch();
} catch(PDOException $e){
    $error=$e->getMessage();
}
?>





<?php if($error) :?>
    <div class="note note-danger">
        <?=$error?>
    </div>
<?php else : ?>
<div class="form-inline container m-2 p-3 row d-flex justify-content-center rounded-5">

    <form action="" class="col-lg-7 p-0 m-0" method="POST">
    <p>
       <a href="/index.php" >Revenir sur nos listes</a>
    </p>
    <?php if($success) :?>
    <div class="note note-success">
        <?=$success?>
    </div>
    <?php endif ?>
        <div class="mt-3 form-group">
        <div class=" mb-2">
            <input type="text" class="form-control" name="name" value="<?=htmlentities($posts->name)?>">
        </div>
        <div class=" mb-2">
            <textarea type="text" class="form-control" name="content"><?=htmlentities($posts->content)?></textarea>
        </div>
        <div class=" mb-2">
            <button class="btn btn-primary">Sauvegarder</button>
        </div>
    </div>
    </form>
</div>
<?php endif ?>

<?php require 'elements/footer.php'?>