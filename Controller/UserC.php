<?php

   // include_once '../config.php';
   // require_once '../Model/User.php';

    class UserC{
		// CRUD
        public function afficher_Utilisateur(){
			$sql="SELECT * FROM user" ;
            $db = config::getConnexion() ;
            try {
                $liste = $db->query($sql) ;
                return $liste ;
            }
            catch(Exception $e) {
                die('Erreur:' .$e->getMessage()) ;
            }
        }
 
		function ajouter_Utilisateur($user){
			$sql="INSERT INTO user (email,username,password,type,numerotele,
					nationalite,sexe,etat) 
				VALUES (:email,:username,:password,:type,:numerotele,
					:nationalite,:sexe,:etat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'email' => $user->getEmail(),
					'username' => $user->getUsername(),
					'password' => $user->getPassword(),
					'type' => $user->getType(),
					'numerotele' => $user->getNumerotele(), 
					'nationalite' => $user->getNationalite(),
					'sexe' => $user->getSexe(),
					'etat' => $user->getEtat()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function supprimer_Utilisateur($id){
			$sql="DELETE FROM user WHERE id= :id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_user',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }

		function modifier_Utilisateur($user, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE user SET 
						email = :email, 
						username = :username, 
						password = :password, 
						type = :type,
						numerotele = :numerotele, 
						nationalite = :nationalite, 
						sexe = :sexe, 
						etat = :etat
					WHERE id = :id_user"
                );
                
                $query->execute([
                    'id_user' => $id,
					'email' => $user->getEmail(),
					'username' => $user->getUsername(),
					'password' => $user->getPassword(),
					'type' => $user->getType(),
					'numerotele' => $user->getNumerotele(), 
					'nationalite' => $user->getNationalite(),
					'sexe' => $user->getSexe(),
					'etat' => $user->getEtat()
				]);		
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function changePass($newpassword, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE user SET  
						password = :password
					WHERE id = :id_user"
                );
                
                $query->execute([
                    'id_user' => $id,
					'password' => $newpassword
				]);		
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function setAdmin($id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE user SET  
						type = :type
					WHERE id = :id_user"
                );
                
                $query->execute([
                    'id_user' => $id,
					'type' => 'admin'
				]);		
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		// RECHERCHE
        function rechercher_Utilisateur($id_user){
			$sql="SELECT * from utilisateurs where id_user=:id_user";
			$db = config::getConnexion();
			$query=$db->prepare($sql);
			$query->bindValue(':id_user',$id_user);

			try{
				$query->execute();
				$utilisateurs=$query->fetch();
				return $utilisateurs;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		public function rechercher_UtilisateurID($id_user) { 
            try {
                $db = config::getConnexion() ; 
                $query = $db->prepare('SELECT * FROM utilisateurs WHERE id_user=:id_user') ; 
                $query->execute([
                    'id_user' => $id_user
                ]) ; 
                return $query->fetchAll();

            } catch (PDOException $e) {
                $e->getMessage() ; 
            } 
        }

		// TRI
		public function trier_UtilisateurId(){
			$sql="SELECT * FROM utilisateurs ORDER BY id_user" ;
            $db = config::getConnexion() ;
            try {
                $liste = $db->query($sql) ;
                return $liste ;
            }
            catch(Exception $e) {
                die('Erreur:' .$e->getMessage()) ;
            }
        }

		public function trier_UtilisateurNom(){
			$sql="SELECT * FROM utilisateurs ORDER BY nom_user ASC" ;
            $db = config::getConnexion() ;
            try {
                $liste = $db->query($sql) ;
                return $liste ;
            }
            catch(Exception $e) {
                die('Erreur:' .$e->getMessage()) ;
            }
        }

		public function trier_UtilisateursUsername(){
			$sql="SELECT * FROM utilisateurs ORDER BY username" ;
            $db = config::getConnexion() ;
            try {
                $liste = $db->query($sql) ;
                return $liste ;
            }
            catch(Exception $e) {
                die('Erreur:' .$e->getMessage()) ;
            }
        }

		function getuserID($id)
        {
            $requete = "select * from user where id=:id";
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
    }
?>