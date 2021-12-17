<?php
    require '../Controller/ReclamationC.php';

    $reclamationC = new ReclamationC();
    $reclamationC->supprimerReclamation($_GET['NumClient']);
    header('Location:afficherReclamation.php');
?>