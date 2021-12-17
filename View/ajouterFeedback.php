<?php

    require_once '../Controller/FeedbackC.php';
    require_once '../Model/Feedback.php' ;



    if (isset($_POST['NumClient'] ) &&isset($_POST['Type'] ) && isset($_POST['Description'] )&& isset($_POST['Idrec'] )
        ) 
    {
            $feedback = new Feedback($_POST['NumClient'] ,$_POST['Type'] ,$_POST['Description'],$_POST['Idrec']
                   );
            $feedbackC = new FeedbackC();
            $feedbackC->ajouterFeedback($feedback);
            header('Location:../El book.php');
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
            <a href="../el book.php">Home</a>
        </div>
    </nav>

    <header>
        <h1>FEEDBACKS</h1>
        <h4>quel est votre feedback</h4>
        <form action="" method="POST" id="inscription">
        <label for="NumClient">NumClient :
        </label> 
        <br>
        <input type="text"  name="NumClient" id="NumClient" >
        <br>
        <br>
        <label for="Type">Type de feedback :
        </label>
        <br>
        <input type="text"  name="Type" id="Type" >
        <br>
        <br>
        
        <label for="Description">Description:
        </label>
        <br>
        <input type="text"  id="Description" name="Description"></input>
        <br>
        <br>
        
        <label for="Idrec">Idreclamation:
        </label>
        <br>
        <input type="text"  id="Idrec" name="Idrec"></input>
        <br>
        <br>
        <input type="submit" value="Envoyer">
         <input type="reset" value="Annuler" >
         <p style="color: red;" id="erreur"></p>
        <script src="text.js"></script>
        
    </header>
</form>
</body></html>
