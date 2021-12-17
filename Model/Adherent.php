<?php
    class Adherent
    {
        private $NumAdherent;
        private $Nom;
        private $Prenom;
        private $Adresse;
        private $Email;
        private $DateInscription;

        function __construct($numadherent, $nom, $prenom, $adresse, $email, $dateinscription){
			$this->NumAdherent=$numadherent;
			$this->Nom=$nom;
			$this->Prenom=$prenom;
			$this->Adresse=$adresse;
			$this->Email=$email;
			$this->DateInscription=$dateinscription;
		}

        function setNumAdherent(string $NumAdherent){
			$this->NumAdherent=$NumAdherent;
		}
        function setNom(string $Nom){
			$this->Nom=$Nom;
		}
        function setPrenom(string $Prenom){
			$this->Prenom=$Prenom;
		}
        function setAdresse(string $Adresse){
			$this->Adresse=$Adresse;
		}
        function setEmail(string $Email){
			$this->Email=$Email;
		}
        function setDateInscription(string $DateInscription){
			$this->DateInscription=$DateInscription;
		}

        function getNumAdherent(){
			return $this->NumAdherent;
		}
        function getNom(){
			return $this->Nom;
		}
        function getPrenom(){
			return $this->Prenom;
		}
        function getAdresse(){
			return $this->Adresse;
		}
        function getEmail(){
			return $this->Email;
		}
        function getDateInscription(){
			return $this->DateInscription;
		}

        
    }
    

?>