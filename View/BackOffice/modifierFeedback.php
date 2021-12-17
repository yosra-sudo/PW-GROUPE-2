<?php

    require_once '../Controller/FeedbackC.php';
    require_once '../Model/Feedback.php' ;
    $feedbackC = new FeedbackC();
    

    if (isset($_POST['NumClient'] ) && isset($_POST['Type'] ) && isset($_POST['Description'] )&& isset($_POST['Idrec'] )
        ) 
    {
        echo $_POST['NumClient'] ;
            $feedback = new Feedback($_POST['NumClient'] , $_POST['Type'] ,$_POST['Description'],$_POST['Idrec']);
            $feedbackC->modifierFeedback($feedback);
            header('Location:afficherFeedback.php');
    }else
    {
        $a = $feedbackC->getFeedbackbyID($_GET['NumClient']) ;
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
        <h1>FEEDBACKS</h1>
        <h4>Effectuer vos modifications</h4>
<form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="NumClient">NumClient:
                        </label>
                    </td>
                    <td><input type="text" name="NumClient" id="NumClient" maxlength="20" value="<?php echo $a['NumClient'];?>"  readonly></td>
                </tr>
                
				
                <tr>
                    <td>
                    <label for="Type">Type:</label>
                    </td>
                    <td><input type="text" value="<?php echo $a['Type'];?>" id="Type" name="Type"
       ></td>
                </tr>
                <tr>
                    <td>
                    <label
    for="Description">Description:
</label>
                    </td>
                    <td>
                    <textarea name="Description" value="<?php echo $a['Description'];?>" id="Description" cols="30" rows="5"></textarea>
                    </td>
                </tr> 
                <tr>
                    <td>
                    <label for="Idrec">Idreclamation:</label>
                    </td>
                    <td><input type="text" value="<?php echo $a['Idrec'];?>" id="Idrec" name="Idrec"
       ></td>
                </tr>      
                <tr>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        </header>
        </body>
