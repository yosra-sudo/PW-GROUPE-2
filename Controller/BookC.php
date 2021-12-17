<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/Adherent.php';


    Class AdherentC {

        function afficherLivre()
        {
            $requete = "select * from livre";
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
        function getLivrebyID($id)
        {
            $requete = "select * from Livre where id_livre=:id";
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

        function ajouterLivre($adherent)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO livre 
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