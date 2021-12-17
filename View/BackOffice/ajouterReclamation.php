<?php

    require_once '../Controller/ReclamationC.php';
    require_once '../Model/Reclamation.php' ;



    if (isset($_POST['NumClient'] ) &&isset($_POST['Titre'] ) && isset($_POST['Description'] )
        ) 
    {
            $reclamation = new Reclamation($_POST['NumClient'] ,$_POST['Titre'] ,$_POST['Description']
                   );
            $reclamationC = new ReclamationC();
            $reclamationC->ajouterReclamation($reclamation);
            header('Location:afficherReclamation.php');
    }
   


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
        <h4>que peut on vous aider avec ?</h4>
        <form action="" method="POST" id="inscription">
        <label for="NumClient">NumClient :
        </label> 
        <br>
        <input type="text"  id="NumClient" name="NumClient" >
        <br>
        <label for="Titre">Titre de reclamation :
        </label>
        <br>
        <input type="text"  id="titre" name="Titre" >
        <br>
        
        <label for="Description">Description:
        </label>
        <br>
        <input type="text"  id="Description" name="Description"></input>
        <br>
        <input type="submit" value="Envoyer">
         <input type="reset" value="Annuler" >
         <p style="color: red;" id="erreur"></p>
        <script src="rec.js"></script>
        <br>
        <a href="ajouterFeedback.php">Ajouter un feedback </a>
    </header>
</form>
</body></html>