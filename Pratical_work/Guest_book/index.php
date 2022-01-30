<?php

namespace Pegasus;

use Pegasus\Guestbook\Message;
use Pegasus\Guestbook\Guestbook;
require "vendor/autoload.php";

$title = "Booking";

$error=null;
$success=false;
$Guestbook=new Guestbook(__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'messages');
if(isset($_POST['message'],$_POST['username'])){
  $message=new Message($_POST['username'],$_POST['message']);
  if($message-> isvalid()){
    $Guestbook->addmessage($message);
    $success=true;
    $_POST=[];
  }
  else{
      $error=$message->geterror();
  }
}
$messages=$Guestbook->getmessages();



require 'elements/header.php';?>

<style>
    .pega{
        background-color: #808080;
    }
    </style>



<main class="container bg-light p-2">
<h2 class="mx-3 my-3">Guest Book</h2>
<div class="form-inline pega m-2 p-3 row d-flex justify-content-center rounded-5">

<form class="col-lg-4 p-0 m-0" action="" method="POST">
            
<?php if($error) :?>
    <div class="note note-danger text-dark">
        Invalid Form
    </div>
<?php endif ?>
<?php if($success) :?>
    <div class="note note-success text-dark">
        Thanks for your message!
    </div>
<?php endif ?>
<br>

            
                <!-- Email input -->
                <div class="form-outline mb-2">
                    <label class="form-label" >Username</label>
                    <input type="text" name="username" class="form-control bg-light" value="<?=htmlentities($_POST['username']??'')?>"/>
                    <?php if(!empty($error['username'])) :?>
                        <div class="invalid-feeback text-warning">
                            <?=$error['username']?>
                        </div>
                    <?php endif ?>
                    
                </div>

                <!-- textarea input -->
                <div class="form-outline mb-4">
                    <label class="form-label">Message</label>
                    <textarea name="message" pladeholder="Your message" class="form-control bg-light" ><?=htmlentities($_POST['message']??'')?></textarea>
                    <?php if(!empty($error['message'])) :?>
                        <div class="invalid-feeback text-warning">
                            <?=$error['message']?>
                        </div>
                    <?php endif ?>
                    
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Send</button>
</form>

</div>
<?php if(!empty($messages)):?>
    <h2 class="mx-3 my-4">Your messages</h2>
    
    <?php foreach ($messages as $msg) :?>
        <div class="mx-3 my-4">
        <?=$msg->toHTML()?>
        </div>
        
    <?php endforeach ?>
<?php endif ?>
</main>

<?php
require 'elements/footer.php';
?>