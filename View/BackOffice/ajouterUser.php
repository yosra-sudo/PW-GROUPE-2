<?php
    require '../../config.php';
    require '../../Model/User.php';
    require '../../Controller/UserC.php';
    session_start();
if ( isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['type']) && isset($_POST['etat']) && isset($_POST['nationalite']) && isset($_POST['numerotele']) && isset($_POST['sexe']) ) {
    
        

        $utilisateur = new user($_POST['email'],$_POST['username'],$_POST['password'],$_POST['type'],$_POST['numerotele'],$_POST['nationalite'],$_POST['sexe'],$_POST['etat']);
        $utilisateurC = new UserC();
        $utilisateurC->ajouter_Utilisateur($utilisateur);
        
    
    
    
}


header('Location: Utilisateurs.php');

?>
    
