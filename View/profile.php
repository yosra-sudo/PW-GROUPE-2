<?php

    include_once '../config.php';
    require '../Model/User.php';
    include_once '../Controller/UserC.php';
    session_start();
    $userC = new UserC();
  //  if (isset($_SESSION['username'])) {
        if ($_SESSION['type'] == "user") {
           $user = $userC->getuserID($_SESSION['id']);
       // }
    } else {
        header('Location:login.php');
    }
    if ( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['id']) && isset($_POST['type']) && isset($_POST['etat']) && isset($_POST['nationalite']) && isset($_POST['numerotele']) && isset($_POST['sexe']) ) {
    
        

        $utilisateur = new user($_POST['email'],$_POST['username'],$_POST['password'],$_POST['type'],$_POST['numerotele'],$_POST['nationalite'],$_POST['sexe'],$_POST['etat']);
        $utilisateurC = new UserC();
        $utilisateurC->modifier_Utilisateur($utilisateur,$_POST['id']);
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
        <h1>Profile</h1>
        <h4>My infos</h4>
        <form action="" method="POST" class="forms-sample">
            <table>
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
            <tr>
            <div class="form-group"><td> <label for="password" >password</label> </td><td> <input type="password" name="password" value="<?php echo $user['password'] ?>">    </td>
            </div>    
        </tr>
               <tr> <td><div class="form-group"><label for="username">Nom d'utilisateur:</label>  </td><td>
                    <input type="text" name="username" value="<?php echo $user['username'] ?>"> </div></td>
                </tr>

                   <tr><td> <div class="form-group"><label for="email">email:</label> </td>
                   <td> <input type="text" name="email" value="<?php echo $user['email'] ?>"> </div> </td> </tr>

                   <tr><td>
                    <div class="form-group"><label for="type">type</label> </td><td> 
                    <input type="text" name="type" value="<?php echo $user['type'] ?>"> </div>
                    </td></tr>
                    <tr><td>
                    <div class="form-group"><label for="numerotele">num telephone:</label> </td> <td> 
                    <input type="text" name="numerotele" value="<?php echo $user['numerotele'] ?>"> </div>
                    </td></tr>

                    <tr><td>
                    <div class="form-group"><label for="nationalite">nationalite :</label>  </td> <td>
                    <input type="text" name="nationalite" value="<?php echo $user['nationalite'] ?>"> </div>
                    </td></tr>

                    <tr><td>
                    <div class="form-group"><label for="sexe">sexe:</label>  </td> <td>
                    <input type="text" name="sexe" value="<?php echo $user['sexe'] ?>"> </div>
                    </td></tr>
                    <tr><td>
                    <div class="form-group"><label for="etat">etat:</label> </td> <td> 
                    <input type="text" name="etat" value="<?php echo $user['etat'] ?>"> </div>
                    </td></tr>
                    <button type="submit" class="btn btn-dark btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button>
            </table>
</body></html>
