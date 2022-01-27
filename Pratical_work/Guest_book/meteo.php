<?php
$title='meteo';
require_once 'class/Meteo.php';
$meteo=new Meteo('63eefdf103155908c74d3504c541ed9f');
$resulat=$meteo->getforecast('Bujumbura,bi');
$today=$meteo->gettodayforecast('Bujumbura,bi');
require 'elements/header.php';?>



<main class="container bg-light p-2">
<h2 class="mx-3 my-3">Today forecast</h2>
    <ul>
        <li>
            <?php $today['date']->setTimezone(new DateTimeZone('Africa/Bujumbura'));?>
            En ce moment,le
            <?= $today['date']->format('d/M/Y à à H:i')?> ,<?=$today['description']?>, <?=$today['temp']?> °C 
        </li>
    <br>
    </ul>
<h2 class="mx-3 my-3">5day / 3hour forecast</h2>
<div class="form-inline pega m-2 p-3 row d-flex justify-content-center rounded-5">
    <ul>
        <?php foreach($resulat as $rs):?>
            <?php $rs['date']->setTimezone(new DateTimeZone('Africa/Bujumbura'));?>
            <li><?= $rs['date']->format('d/M/Y à à H:i')?> ,<?=$rs['description']?>, <?=$rs['temp']?> °C </li>
            <br>
        <?php endforeach ?>
    </ul>
</div>
</main>
<?php
require 'elements/footer.php';
?>
