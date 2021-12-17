<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/Adherent.php';


    Class AdherentC {

        function afficherAdherent()
        {
            $requete = "select * from adherent";
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
        function getAdherentbyID($id)
        {
            $requete = "select * from adherent where NumAdherent=:id";
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

        function ajouterAdherent($adherent)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO adherent 
                (NumAdherent,Nom,Prenom,Adresse,Email,DateInscription)
                VALUES
                (:NumAdherent,:Nom,:Prenom,:Adresse,:Email,:DateInscription)
                ');
                $querry->execute([
                    'NumAdherent'=>$adherent->getNumAdherent(),
                    'Nom'=>$adherent->getNom(),
                    'Prenom'=>$adherent->getPrenom(),
                    'Adresse'=>$adherent->getAdresse(),
                    'Email'=>$adherent->getEmail(),
                    'DateInscription'=>$adherent->getDateInscription()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierAdherent($adherent)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE adherent SET
                Nom=:Nom,Prenom=:Prenom,Adresse=:Adresse,Email=:Email,DateInscription=:DateInscription

                where NumAdherent=:NumAdherent
                ');
                $querry->execute([
                    'NumAdherent'=>$adherent->getNumAdherent(),
                    'Nom'=>$adherent->getNom(),
                    'Prenom'=>$adherent->getPrenom(),
                    'Adresse'=>$adherent->getAdresse(),
                    'Email'=>$adherent->getEmail(),
                    'DateInscription'=>$adherent->getDateInscription()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerAdherent($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM adherent WHERE NumAdherent =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    }

?>