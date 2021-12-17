<?php
class User
{
    private $id;
    protected $email;

    protected $username;

    protected $password;

    protected $type;

    protected $numerotele;

    protected $nationalite;

    protected $sexe;

    protected $etat;

    public function __construct($email, $username, $password, $type, $numerotele, $nationalite, $sexe, $etat)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->type = $type;
        $this->numerotele = $numerotele;
        $this->nationalite = $nationalite;
        $this->sexe = $sexe;
        $this->etat = $etat;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of numerotele
     */ 
    public function getNumerotele()
    {
        return $this->numerotele;
    }

    /**
     * Set the value of numerotele
     *
     * @return  self
     */ 
    public function setNumerotele($numerotele)
    {
        $this->numerotele = $numerotele;

        return $this;
    }

        /**
         * Get the value of nationalite
         */ 
        public function getNationalite()
        {
                return $this->nationalite;
        }

        /**
         * Set the value of nationalite
         *
         * @return  self
         */ 
        public function setNationalite($nationalite)
        {
                $this->nationalite = $nationalite;

                return $this;
        }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}


?>