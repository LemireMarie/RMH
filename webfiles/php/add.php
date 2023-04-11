<?php
$adding = new PDO('mysql:host=localhost;dbname=rmh;charset=utf8','root','');
if (!empty($adding)){
    if($_POST){
    $name = $_POST["productName"];
    $skin = $_POST["skinType"];
    $pt = $_POST["productType"];
    $img = $_POST["img"];
   $char = $_POST["characteristics"];
    $price = $_POST["price"];
    $req = "INSERT INTO products (productName,skinType, productType,img, characteristics, price) VALUES ('$name', '$skin', '$pt','$img','$char',$price) ";

    var_dump($req);
    $exec = $adding->query($req);
    if ($exec != false){
        echo "adding complete";
    }
}
else {
    echo "problem with adding ";
}
}

?>