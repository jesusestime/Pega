<?php 

$title="Nous contactez";
require 'header.php';
require_once 'function.php';
?>

<main class="container bg-light p-5">
<h1>Nous Contactez</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga tempora minus excepturi tempore laudantium dicta aspernatur, accusamus, voluptatum suscipit non laboriosam dolore! Eaque expedita a ipsam repellat delectus nemo?</p>
<h3>Heures d'ouverture de notre site Web</h3>
<ul>
    <strong><?php foreach (JOURS as $i=>$j){ echo '<br>'.JOURS[$i].'<br> '?></strong>
   <li>
     <?=htmlcren(CREN[$i]);?>
   </li>
   <strong><?php } ?></strong>
 </ul>
</main>


<?php require 'footer.php'; ?>