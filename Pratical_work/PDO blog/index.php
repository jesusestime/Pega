<?php 
require 'elements/header.php';
require_once 'class/Post.php';
$pdo=new PDO('sqlite:data.db',null,null,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
$error=null;
$success=null;
try{
    //ajouter un article
    if(isset($_POST['name'],$_POST['content'])){
        $query=$pdo->prepare('insert into posts(name,content,date) values (:name,:content,:date)');
        $query->execute(
            [
                'name'=>$_POST['name'],
                'content'=>$_POST['content'],
                'date'=>time()
            ]
            );
        $success="Votre article a bien été ajouté";
        header('Location:/edit.php?id='.$pdo->lastInsertId());
        exit();
    }
    //lister les articles
    $query=$pdo->query('select *  from posts');
    $posts=$query->fetchAll(PDO::FETCH_CLASS,'Post');
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
        
        <div class="col-lg-7 p-0 m-0">
            <h2>
                Liste de nos articles
            </h2>
        
            
                <?php foreach($posts as $p):?> 
                    <small class="mt-2 mb-0"><em>
                     Publié le <?=nl2br(htmlentities(date("d-m-Y",$p->date)))?></em>
                    </small> 
                 <h2><a href="edit.php?id=<?=$p->id?>" ><?=htmlentities($p->name)?></a></h2>
                 <p>
                     <?=nl2br(htmlentities($p->getsmalltext()))?>
                 </p>  
                 <button class="btn btn-danger btn-sm my-2"><a class="text-light" href="delete.php?id=<?=$p->id?>" >Supprimer</a></button>
                <hr>
                <?php endforeach ?>
           
       </div>
    <form action="" class="col-lg-7 p-0 m-0" method="POST">
        <h2>Ajouter un article </h2>
        <?php if($success) :?>
        <div class="note note-success">
            <?=$success?>
        </div>
        <?php endif ?>
        <div class="mt-3 form-group">
        <div class=" mb-2">
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class=" mb-2">
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>
        <div class=" mb-2">
            <button class="btn btn-primary">Ajouter</button>
        </div>
    </div>
    </form>
</div>
<?php endif ?>

<?php require 'elements/footer.php'?>