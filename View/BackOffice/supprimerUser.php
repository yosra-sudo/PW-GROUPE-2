<?php
    require '../../config.php';
    require '../../Controller/UserC.php';

    $UserC = new UserC();
    $UserC->supprimer_Utilisateur($_GET['id']);
    header('Location:Utilisateurs.php');
?>