 
 
 <!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Ajouter un livre
</title>
<?php 
include "init_site.php";
    
     $vr_id = $_GET['data1'];

     
     ?>


 


</head>
<body>  <div class="titre2">

    Le livre à eté suuprimer .<br>
    <?php
  header('Location:../el book.php?data=gestion1');
  exit();
?>
    <li><a href="../el book.php?data=gestion1">Retour à la gestion des livre</a></li>


</div>
</body>

</html>


