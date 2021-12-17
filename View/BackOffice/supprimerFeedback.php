<?php
    require '../Controller/FeedbackC.php';

    $feedbackC = new FeedbackC();
    $feedbackC->supprimerFeedback($_GET['NumClient']);
    header('Location:afficherFeedback.php');
?>