<?php 
$title="Dashboard";
require 'counter/function.php';
require 'header.php';

$total=null;
$year=(int)date('Y');
$month1=(int)date('m');
$year_selected=empty($_GET['annee'])? null : (int)$_GET['annee'];
$month_selected=empty($_GET['mois'])? null : (int)$_GET['mois'];

if($year_selected && $month_selected){
   $total=vues_mois($month_selected,$year_selected);
   $details=vues_details_mois($month_selected,$year_selected);
}
else{
    $total=read_views();
    $details=[];
}


$month=[
    '01'=>'Janvier',
    '02'=>'Février',
    '03'=>'Mars',
    '04'=>'Avril',
    '05'=>'Mai',
    '06'=>'Juin',
    '07'=>'Juillet',
    '08'=>'Août ',
    '09'=>'Septembre',
    '10'=>'Octobre',
    '11'=>'Novembre',
    '12'=>'Décembre',
];


?>




<main class="container  row g-3 bg-light p-5 rounded">
<div class="row justify-content-center">
    <div class="col-md-4">
    <div class="list-group">
        <?php for($i=0;$i<5;$i++):?>
        <a class="list-group-item list-group-item-action <?=$year-$i===$year_selected ? 'active' : ''?>" href="/dashboard.php?annee=<?=$year-$i?>"><?=$year-$i?></a>
        <?php if($year-$i===$year_selected) :?>
            
            <div class="list-group mt-1">
                <?php foreach($month as $num => $name):?>
                    <a class="list-group-item list-group-item-action  <?= (int)$num===$month_selected ? 'active' : ''?> " href="/dashboard.php?annee=<?=$year_selected?>&mois=<?=$num?>"><?=$name?>
                    </a>
                <?php endforeach?>
            </div>
        <?php endif ?>
        <?php endfor ?>    
        </div>
    </div>
    <div class=" col-md-8">
        
        <div class="card">
            <div class="card-body">
                <strong><?=$total?></strong><br>
                Visite<?= $total >1 ?'s':''?> total

            </div>
        </div>
        <?php if(!empty($details)) :?>
        <h2 class="my-3">Tableau détails par mois </h2>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Jour</th>
                    <th scope="col">Nombre de visite</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($details as $det):?>
                    <tr>
                    <th scope="row">1</th>
                    <td><?=$det["jour"]?></td>
                    <td><?=$det["vues"]?></td>
                    <?php endforeach ?>
                    </tr>
                    <tr>
                </tbody>
        </table>
        <?php endif ?>
    </div>

</div>

</main>
<?php 
require 'footer.php';
?>