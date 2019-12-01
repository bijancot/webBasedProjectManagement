<?php
// //var_dump($_POST['menuList']);
// $idRole = htmlentities($_POST['idRole']);
$roleName = htmlentities($_POST['roleName']);
$roleDesc = htmlentities($_POST['roleDesc']);
$password = htmlentities($_POST['passwordRole']);
$username = htmlentities($_POST['usernameRole']);
$passhash = md5($password);
$job = htmlentities($_POST['job']);
$idMenu = $_POST['menuList'];
$idUser = htmlentities($_POST['idUser']);

$query = $db->prepare("INSERT INTO `mmo_role`(`roleName`, `roleDesc`,`job`) VALUES (:roleName,:roleDesc,:job)");

$query->bindParam(":roleName", $roleName);
$query->bindParam(":roleDesc", $roleDesc);
$query->bindParam(":job", $job);

$query->execute();

$select = $db->prepare("SELECT idRole FROM mmo_role where roleName=:roleName");
$select->bindParam(":roleName", $roleName);
          $select->execute();
          $tampil = $select->fetchAll();
  foreach($tampil as $value){
    $idRole = $value['idRole'];
}
foreach($idMenu as $ho){
$query1 = $db->prepare("INSERT INTO `tr_role_menu`( `idRole`, `idMenu`) VALUES (:idRole,:idMenu)");
$query1->bindParam(":idRole", $idRole);
$query1->bindParam(":idMenu", $ho);
$query1->execute();
}
echo $idRole;
$update = $db->prepare("UPDATE mmo_users set roleId=:idRole where idUser=:idUser");
$update->bindParam(":idRole", $idRole);
$update->bindParam(":idUser", $idUser);
$update->execute();

header('location:?mmopilot=managerole');
?>