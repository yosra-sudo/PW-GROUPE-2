<?php

    require_once '../Assets/Utils/config-conn-book.php';
    require_once '../Model/book_model.php';
    Class Book_fonction {
        function afficherLivre()
        {
            $requete = "SELECT * FROM livre";
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
        function ajouterLivre($livre)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO livre
                (id_livre, Nom_livre, auteur, prix_livre, Type, Note, Image_livre, Resumer_livre) 
                VALUES 
                (:id_livre, :Nom_livre, :auteur, :prix_livre, :Type, :Note, :Image_livre, :Resumer_livre)
                '); 
                $querry->execute([
                    'NumAdherent'=>$livre->getNumAdherent(),
                    'Nom'=>$livre->getNom(),
                    'Prenom'=>$livre->getPrenom(),
                    'Adresse'=>$livre->getAdresse(),
                    'Email'=>$livre->getEmail(),
                    'DateInscription'=>$livre->getDateInscription()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

    }


    
    
    
    
    
    
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