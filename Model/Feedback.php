<?php
    class Feedback
    {
        private $NumClient;
        private $Type;
        private $Description;
		private $Idrec;
      

        function __construct($numClient,$type, $description, $idrec){
			$this->NumClient=$numClient;
			$this->Type=$type;
			$this->Description=$description;
			$this->Idrec=$idrec;
			
		}

        function setNumClient(string $NumClient){
			$this->NumClient=$NumClient;
		}
        function setType(string $Type){
			$this->Type=$Type;
		}
        function setDescription(string $Description){
			$this->Description=$Description;
		}
		function setIdrec(string $Idrec){
			$this->Idrec=$Idrec;
		}
        

        function getNumClient(){
			return $this->NumClient;
		}
        function getType(){
			return $this->Type;
		}
        function getDescription(){
			return $this->Description;
		}
		function getIdrec(){
			return $this->Idrec;
		}
        
        
    }
    

?>