<?php

class Database {
private $db_host = "loaclhost";
private $db_user = "root";
private $db_password = "";
private $db_name = "pokedex";

public function _construct()
{
    try{
$dns = "mysql:host={$this->db_host}; db_name={$this->db_name}; charset=utf8";
$option = array(PDO::ATTR_PERSISTENT);
$this->conn = new PDO($dns, $this->db_user, $this->db_user, $option);
    }catch (PDOException $e){
        echo "Impossible de se connecter: " . $e->getMessage();


}
}
}
?>