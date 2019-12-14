<?php


class Dbase{

private $servername;
private $username;
private $password;
private $dbname;
private $charset;

public function connect(){


$this->servername = "localhost";
$this->username = "root";
$this->password = "";
$this->dbname = "vasarloirendelesinformaciok";
$this->charset = "utf8mb4";


//Kapcsolat létrehozása és hibakezelés
try{
$datasource = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset".$this.charset;
$pdo = new PDO($datasource,$this->username,$this->password);
$pdo = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;

}catch(PDOException $e){

print "Connection Failed!: " . $e->getMessage();

    die();
  } 
 }
}
?>