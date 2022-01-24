<?php
function est_connecte():bool{
    if(session_status()===PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecte']);
}
function redirection_user():void{
    if(!est_connecte()){
        header('Location:/login.php');
        exit();
    }

}



