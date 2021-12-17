<?php
    require '../Controller/FeedbackC.php';

    $feedbackC = new FeedbackC();
   // $listeFeedback=$feedbackC->triFeed();
    $feedbacks = $feedbackC->afficherFeedback();
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
            <a href="index.html">Home</a>
        </div>
    </nav>
    <header>
        <h1>FEEDBACKS</h1>
        <h4>Ceci est la liste de vos feedbacks</h4>



<table border='2'>
  <tr>
    <th>NumClient</th>
    <th>Type</th>
    <th>Description</th>
    <th>Id reclamation</th>
    
  </tr>
        <?php 
                foreach ($feedbacks as $feedback) {
        ?>


  <tr>
    <td><?php echo $feedback['NumClient'] ; ?></td>
    <td><?php echo $feedback['Type'] ; ?></td>
    <td><?php echo $feedback['Description'] ; ?></td>
    <td><?php echo $feedback['Idrec'] ; ?></td>
    
    <td><a href="supprimerFeedback.php?NumClient=<?php echo $feedback['NumClient'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
    <td><a href="modifierFeedback.php?NumClient=<?php echo $feedback['NumClient'] ; ?>">modifier</a></td>
  </tr>


        <?php
                }
        ?>
</table>
<a href="ajouterFeedback.php">Ajouter Feedback </a>
<a href="affichertitreFeedback.php">trier par type </a>
              </header>
              </body>
</html>



    