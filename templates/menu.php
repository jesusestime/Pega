<?php
$title="Notre menu";
$location_file=file(__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'menu.tsv');
foreach($location_file as $l => $line){
    $location_file[$l]=explode("\t",trim($line));
}
require 'header.php';
?>
<div class="container bg-light p-5 rounded">
<h3>Menu</h3>
<?php foreach($location_file as $l):?>
   <?php if(count($l)==1) :?>
            <h2 class="my-5"><?=$l[0]?></h2>
    <?php else :?>
        <div class="row">
            <div class="col-sm-8 my-1">
                <strong ><?=$l[0]?></strong><br>
                <div ><?=$l[1]?></div>
            </div>
            <div class="col-sm-4 my-3 text-dark">
                <b><?=number_format($l[2],2,',','  ') ?>$</b>
            </div>
        </div>
    <?php endif ?>
<?php endforeach ?>    



</div>


<?php require 'footer.php';
?>