<?php

    require_once '../config.php';
    require_once '../Model/Feedback.php';


    Class FeedbackC {

        function afficherFeedback()
        {
            $requete = "select * from feedback";
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
        function getFeedbackbyID($id)
        {
            $requete = "select * from feedback where NumClient=:id";
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

        function ajouterFeedback($feedback)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO feedback 
                (NumClient,Type,Description,Idrec)
                VALUES
                (:NumClient,:Type,:Description,:Idrec)
                ');
                $querry->execute([
                    'NumClient'=>$feedback->getNumClient(),
                    'Type'=>$feedback->getType(),
                    'Description'=>$feedback->getDescription(),
                    'Idrec'=>$feedback->getIdrec(),
                    
                   
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierFeedback($feedback)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE feedback SET
                Type=:Type,
                Description=:Description,
                Idrec=:Idrec
                

                where NumClient=:NumClient
                ');
                $querry->execute([
                    'NumClient'=>$feedback->getNumClient(),
                    'Type'=>$feedback->getType(),
                    'Description'=>$feedback->getDescription(),
                    'Idrec'=>$feedback->getIdrec(),
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerFeedback($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM feedback WHERE NumClient =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function affichertitreFeedback()
        {
            $requete = "select * from rec ORDER BY Type";
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