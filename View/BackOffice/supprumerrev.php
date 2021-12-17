<?php
include_once '../../config.php';
include '../../Controller/reviewc.php';

$off=new revc();
$sup=$off->supprimerrev($_POST['id']);
header('location:basic-table.php');

?>
