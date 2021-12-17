<?php
    class Livre
    {	
			private $Id_livre;
			private $Nom_Livre;
			private $Auteur;
			private $Prix_Livre;
			private $Type;
			private $Note;
			private $Image_Livre;
			private $Resumer_Livre;
	
			 
	
			function __construct($id_livre, $nom_Livre, $auteur ,$prix_Livre,  $type ,$note,  $image_Livre, $resumer_Livre){
				$this->Id_livre=$id_livre;
				$this->Nom_Livre=$nom_Livre;
				$this->Auteur=$auteur;
				$this->Prix_Livre=$prix_Livre;
				$this->Type=$type;
				$this->Note=$note;
				$this->Image_Livre=$image_Livre;
				$this->Resumer_Livre=$resumer_Livre;
	
			}
	

        function setId_livre(string $Id_livre){
			$this->Id_livre=$Id_livre;
		}
        function setNom_Livre(string $Nom_Livre){
			$this->Nom_Livre=$Nom_Livre;
		}
        function setAuteur(string $Auteur){
			$this->Auteur=$Auteur;
		}
        function setPrix_Livre(string $Prix_Livre){
			$this->Prix_Livre=$Prix_Livre;
		}
        function setType(string $Type){
			$this->Type=$Type;
		}
        function setNote(string $Note){
			$this->Note=$Note;
		}
		function setImage_Livre(string $Image_Livre){
			$this->Image_Livre=$Image_Livre;
		}
		function setResumer_Livre(string $Resumer_Livre){
			$this->Resumer_Livre=$Resumer_Livre;
		}
        function getId_livre(){
			return $this->Id_livre;
		}
        function getNom_Livre(){
			return $this->Nom_Livre;
		}
        function getAuteur(){
			return $this->Auteur;
		}
        function getPrix_Livre(){
			return $this->Prix_Livre;
		}
        function getType(){
			return $this->Type;
		}
        function getNote(){
			return $this->Note;
		}
		function getImage_Livre(){
			return $this->Image_Livre;
		}function getResumer_Livre(){
			return $this->Resumer_Livre;
		} 
    }
    

?>