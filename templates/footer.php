<footer class="bg-light text-center text-lg-start mt-4 fixed-bottom">
  <!-- Copyright -->
  <?php 
  require_once __DIR__.DIRECTORY_SEPARATOR.'counter'.DIRECTORY_SEPARATOR.'function.php';
  directory_views();
  $views=read_views();
  ?>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

    © 2021 Copyright:
    <a class="text-dark" href="">Mon site web</a><br>
    <small class="small i">Il y a <?=$views?> visite<?php if($views>1):?>s<?php endif ?></small>
  </div>
  <!-- Copyright -->
</footer>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
></script>
 
</body>
</html>