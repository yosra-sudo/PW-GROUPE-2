 
 
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
     $rate = $_GET['rate_n'];

     
     ?>

<?php
 {
    
  
    $sql3 = "UPDATE `livre` SET `Note` = $rate ,`nb_visite`=nb_visite+1 WHERE `livre`.`id_livre` = $vr_id;"; 
    $sql4 = "UPDATE `livre` SET `Note` = $rate ,`nb_visite`=nb_visite+1 WHERE `livre`.`id_livre` = $vr_id;";   
    echo $sql3;
    try{
        
       $result3 = $conn->prepare($sql3);
        $result3->execute(); 
       
       }
   
       
      
      catch (PDOException $e){
       
      }
   
}
?>



</head>
<body>  <div class="titre2">

Le livre à eté suuprimer .<br>
<?php
  header('Location:../el book.php?data=2');
  exit();
?>
    <li><a href="../el book.php?data=2">Retour à la gestion des livre</a></li>


</div>
</body>

</html>


