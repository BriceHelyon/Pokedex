 <?php

include('dbConnction.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];


if(!empty($name) && !empty($email) && !empty($password)){
$sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password') ";
if($conn->query($sql) == TRUE){
    echo "Utilisateur ajouté";
    }else {
    echo "Impossible d'ajouté l'utilisateur";
    }
}else {
    echo "Remplir tous les champs";
}

 

?>
