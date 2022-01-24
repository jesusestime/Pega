<?php
require_once 'auth/auth.php';
//login condition
$password='$2y$12$dNIJ.vXzPETtDkcpV7K5V.S2tzBzenPSui0k6hK.rnAc8lk52nJg.';
$error=null;

if(!empty($_POST['username'])&&!empty($_POST['password'])){
    if($_POST['username'] === "admin" &&  password_verify($_POST['password'],$password))
    {
        session_start();
        $_SESSION['connecte']=1;
        header('Location: /dashboard.php');
        exit();
    }
    else{
        $error="Identifiant ou mot de passe incorrect";
    }
}
if(est_connecte()){
    header('Location: /dashboard.php');
    exit();
}
?>






<?php require 'header.php';
?>
<div class="  g-3 bg-light  p-5 rounded">
    <div  class="container row justify-content-center">
    
    <form class="col-lg-5" action="" method="POST">
        <?php if($error) :?>
            <div class="note note-danger">
                <?=$error?>
            </div>
        <?php endif ?>
        <br>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" name="username" class="form-control" />
            <label class="form-label" >Username</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" class="form-control" />
            <label class="form-label">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </form>
    </div>
</div>
<?php
require 'footer.php';
?>