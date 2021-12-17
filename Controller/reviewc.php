<!DOCTYPE html>
<html>

<?php 

class revc{
	function afficherrev(){
		$sql="SELECT * FROM review ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimerrev($off){
 $sql="DELETE  FROM review WHERE `id`= $off ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}

function Modifierrev($of)
{
$sqlc= "UPDATE `review` SET journaliste=:jor,titre=:tit ,cont=:con WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['jor' =>$of->getjour(),
		              'tit' =>$of->gettitre(),
		           'con' =>$of->getcon(),
		              'id'=>$of->getid(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajouter($of){
$sql= "INSERT INTO `review` VALUES (:id,:jour, :dat, :tit, :image,:id_ct,:con)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 'id'=>$of->getid(),
		            'jour' =>$of->getjour(),
		            'dat'=>$of->getdate(),
		            'tit'=>$of->gettitre(),
		            'image'=>$of->getimage(),
		             'id_ct'=>$of->getid_cat(),
		                'con'=>$of->getcon(),
		             
		                  
		       
		       



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
	function affichercat(){
		$sql="SELECT * FROM categorie ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimercat($off){
 $sql="DELETE  FROM categorie WHERE `id_categ`= $off ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}

function Modifierevent($of)
{
$sqlc= "UPDATE `categorie` SET nom=:nom  WHERE id_categ=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['nom' =>$of->getnom(),
		             
		              'id'=>$of->getid(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajoutercat($of){
$sql= "INSERT INTO `categorie` VALUES (:id,:nom)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 'id'=>$of->getid(),
		            'nom' =>$of->getnom(),
		        
		       



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
function trieoffre(){
		$sql="SELECT * FROM evenement ORDER BY nom_event";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	 }
function tri(){
		$sql="SELECT * FROM review order by titre";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}
	function recherche($search_value)
    {
        $sql="SELECT * FROM review where 	id like '$search_value' or journaliste like '%$search_value%' or titre like '%$search_value%'  ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
}
?>
</html>
