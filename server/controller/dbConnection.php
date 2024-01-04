<?php
$db_host = "loaclhost";
$db_user = "root";
$db_password = "";
$db_name = "pokedex";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if($conn->connect_error){
    die("Impossible de se connecter à la base de donnée");
}

?>