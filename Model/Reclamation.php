<?php
    class Reclamation
    {
        private $NumClient;
        private $Titre;
        private $Description;
      

        function __construct($numClient,$titre, $description){
			$this->NumClient=$numClient;
			$this->Titre=$titre;
			$this->Description=$description;
			
		}

        function setNumClient(string $NumClient){
			$this->NumClient=$NumClient;
		}
        function setTitre(string $Titre){
			$this->Titre=$Titre;
		}
        function setDescription(string $Description){
			$this->Description=$Description;
		}
        

        function getNumClient(){
			return $this->NumClient;
		}
        function getTitre(){
			return $this->Titre;
		}
        function getDescription(){
			return $this->Description;
		}
        
        
    }
    

?>