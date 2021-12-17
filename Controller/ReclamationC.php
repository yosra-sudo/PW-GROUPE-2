<?php

    require_once '../config.php';
    require_once '../Model/Reclamation.php';


    Class ReclamationC {

        function afficherReclamation()
        {
            $requete = "select * from rec";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function getReclamationbyID($id)
        {
            $requete = "select * from rec where NumClient=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterReclamation($reclamation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO rec 
                (NumClient,Titre,Description)
                VALUES
                (:NumClient,:Titre,:Description)
                ');
                $querry->execute([
                    'NumClient'=>$reclamation->getNumClient(),
                    'Titre'=>$reclamation->getTitre(),
                    'Description'=>$reclamation->getDescription(),
                    
                   
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierReclamation($reclamation)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE rec SET
                Titre=:Titre,
                Description=:Description,
                

                where NumClient=:NumClient
                ');
                $querry->execute([
                    'NumClient'=>$reclamation->getNumClient(),
                    'Titre'=>$reclamation->getTitre(),
                    'Description'=>$reclamation->getDescription(),
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerReclamation($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM rec WHERE NumClient =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function affichertitreReclamation()
        {
            $requete = "select * from rec ORDER BY Titre";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
       
    
    
     
    
    }

?>