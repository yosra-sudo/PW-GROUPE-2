<?php 
include_once '../config.php';
include '../Controller/reviewc.php';
include '../model/review.php';

if(!isset($_POST['id'])||!isset($_POST['jour'])||!isset($_POST['tit'])||!isset($_POST['con']))
{
	echo "erreur de ";
}

$pof=new  revve( $_POST['id'],$_POST['jour'], $_POST['tit'],$_POST['con']);


$off=new revc();
$sup=$off->Modifierrev($pof);
header('location:basic-table.php');





?>