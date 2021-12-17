<?php

    require_once '../Controller/ReclamationC.php';
    require_once '../Model/Reclamation.php' ;
    
    
    $reclamationC = new ReclamationC();
    if (isset($_POST['NumClient'] ) && isset($_POST['Titre'] ) && isset($_POST['Description'] )
        ) 
    {
        echo $_POST['NumClient'] ;
            $reclamation = new Reclamation($_POST['NumClient'] , $_POST['Titre'] ,$_POST['Description']  );
            
            $reclamationC->modifierReclamation($reclamation);
            header('Location:afficherReclamation.php');
    }else
    {
        $a = $reclamationC->getReclamationbyID($_GET['NumClient']) ;
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
        <h4>effectuer vos modifications </h4>
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
                    <label for="Titre">Titre:</label>
                    </td>
                    <td><input type="text" value="<?php echo $a['Titre'];?>" id="Titre" name="Titre"
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
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELBOOK / RECLMATIONS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Assets/CSS/style.css">
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
        
    </header>
</form>
</body></html>