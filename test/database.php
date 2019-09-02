<?php
$username = "budosen";
$pass = "bijan2089";
$host = "172.18.20.3";

$mysqli = new mysqli($host,$username,$pass,"mmopilot");

//Contoh script select dari database
//Referensi lebih lengkap : https://github.com/bijancot/aPTO/tree/master/compare
$bind = "dasdasd";
$hoo = $mysqli->prepare("SELECT idUser FROM mmo_users where idUser!=?");
$hoo->bind_param('s',$bind);
$hoo->execute();
$hoo->bind_result($iduser);

while($hoo->fetch()){
    echo $iduser;
}
?>