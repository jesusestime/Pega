<script src="bootstrap.min.js.téléchargement" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap.min.js"><\/script>')</script><script src="bootstrap.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<div class="container">
            <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                  <h3>Navigation</h3>
                  <?php require_once 'fonction.php'?>
                  <ul class="list-unstyled text-small">
                        <?= navbar('Accueil','/index.php')?>
                        <?= navbar('Contact','/contact.php')?>
                        <?= navbar('Blog','/contact.php')?>
                  </ul>
                  </div>
            </div>
</div>




</body></html>