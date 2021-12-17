<?php 
include_once '../config.php';
include '../Controller/reviewc.php';
include '../model/cat.php';

if(!isset($_POST['id'])||!isset($_POST['nom']))
{
	echo "erreur de ";
}

$pof=new  catt( $_POST['id'],$_POST['nom']);


$off=new revc();
$sup=$off->Ajoutercat($pof);
header('location:basic-table.php');





?>