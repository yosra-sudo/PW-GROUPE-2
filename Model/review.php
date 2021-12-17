<?php
class rev{
	private $id;
private $jour;
	private $date;
private $titre;
private $image;
private $id_cat;
private $con;

public  function __construct($id,$jour,$date,$titre,$image,$id_cat,$con)
{
	$this->id=$id;
    $this->jour=$jour;
    $this->date=$date;
    $this->titre=$titre;
      $this->image=$image;
          $this->id_cat=$id_cat;
                    $this->con=$con;
}
public  function getid()
{
	return $this->id;
}
public function getjour()
{
	return $this->jour;
}
public  function getdate()
{
	return $this->date;
}
public function gettitre()
{
	return $this->titre;
}
public function getimage()
{
	return $this->image;
}
public function getid_cat()
{
	return $this->id_cat;
}
public function getcon()
{
	return $this->con;
}
}


class revve{
	private $id;
private $jour;

private $titre;
private $con;

public  function __construct($id,$jour,$titre,$con)
{
	$this->id=$id;
    $this->jour=$jour;

    $this->titre=$titre;

    $this->con=$con;
}
public  function getid()
{
	return $this->id;
}
public function getjour()
{
	return $this->jour;
}

public function gettitre()
{
	return $this->titre;
}
public function getcon()
{
	return $this->con;
}

}





?>