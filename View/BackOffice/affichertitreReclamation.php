<?php
    require '../Controller/ReclamationC.php';

    $reclamationC = new ReclamationC();
    

    $reclamations = $reclamationC->affichertitreReclamation();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELBOOK / RECLMATIONS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Assets/CSS/stylefeed.css">
</head>
<body>
<nav>
        <h1>El Book</h1>
        <div class="onglets">
            <a href="#">Home</a>
            <a href="#elbooks">Elbooks</a>
            <a href="#commande">Commande</a>
            <a href="#livraison">Livraison</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>
    <header>
        <h1>RECLMATIONS</h1>
        <h4>Ceci est la listes des reclamations</h4>


<table border='2'>
  <tr>
    <th>NumClient</th>
    <th>Titre</th>
    <th>Description</th>
    
  </tr>
        <?php 
                foreach ($reclamations as $reclamation) {
        ?>


  <tr>
    <td><?php echo $reclamation['NumClient'] ; ?></td>
    <td><?php echo $reclamation['Titre'] ; ?></td>
    <td><?php echo $reclamation['Description'] ; ?></td>
    
    <td><a href="supprimerReclamation.php?NumClient=<?php echo $reclamation['NumClient'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
    <td><a href="modifierReclamation.php?NumClient=<?php echo $reclamation['NumClient'] ; ?>">modifier</a></td>
  </tr>


        <?php
                }
        ?>
</table>
<a href="afficherReclamation.php">trier par identifiant </a>
<a href="ajouterReclamation.php">Ajouter Reclamation </a>
<a href="ajouterFeedback.php">Ajouter un feedback </a>
              </header>
              </body>
</html>