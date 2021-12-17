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

 <body>
   <div class="titre2">

     L'auteur a ete ajoutrer avec' .<br>
     <?php
      header('Location:../el book.php?data=gestion1');
      exit();
      ?>
     <li><a href="../el book.php?data=gestion1">Retour à la gestion des hauteur</a></li>


   </div>
 </body>

 </html>