<?php 
include_once '../config.php';
include_once '../../Controller/offrec.php';
include_once '../../model/evente.php';


$db=config::getConnexion();
$sql="SELECT * FROM evenement where  id_event=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_POST['id_event']]);
$title=$recipesStatement->fetchall();
foreach ($title as $res) { 

	$x=$res['nbr']; 
}
$s=$x+1;

if(!isset($_POST['id_event']))
{
	echo "erreur de ";
}



//$off=new offrec();
$lod=$off->upnbr($_POST['id_event'],$s);
header('location:http://localhost/yosra/view/fr/event.php');





?>