<?php
include_once '../config.php';
include '../Controller/reviewc.php';

$off=new revc();
$sup=$off->supprimercat($_POST['id_categ']);
header('location:basic-table.php');

?>
