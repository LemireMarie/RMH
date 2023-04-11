<?php
$connexion = new PDO('mysql:host=localhost;dbname=rmh;charset=utf8','root','');

if(!empty($connexion)){

$id = $_POST["id"];
// declarer une requete 
$requete = "DELETE FROM products WHERE id=$id";
// l'executer
$execution = $connexion->query($requete);
if($execution != false){
    echo "requête valide";
    header("Location: ./scriptRMH.php");
}else{
    echo "requête invalide";
}
}else{
echo "echec de la connexion";
}
?>