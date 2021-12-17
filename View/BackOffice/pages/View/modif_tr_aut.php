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

   L'auteur à eté modifier  .<br>
     <?php
      header('Location:../el book.php?data=gestion2');
      exit();
      ?>
     <li><a href="../el book.php?data=gestion2">Retour à la gestion des liauteurs </a></li>


   </div>
 </body>

 </html>