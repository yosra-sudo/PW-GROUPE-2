<?php
    require '../../config.php';
    require '../../Controller/UserC.php';

    $UserC = new UserC();
    $UserC->setAdmin($_GET['id']);
    header('Location:Utilisateurs.php');
?>