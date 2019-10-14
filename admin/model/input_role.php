<?php
//var_dump($_POST['menuList']);
$idRole = htmlentities($_POST['idRole']);
$roleName = htmlentities($_POST['roleName']);
$roleDesc = htmlentities($_POST['roleDesc']);
$password = htmlentities($_POST['passwordRole']);
$username = htmlentities($_POST['usernameRole']);
$passhash = md5($password);
$job = htmlentities($_POST['job']);
$idMenu = $_POST['menuList'];

$query = $db->prepare("INSERT INTO `mmo_role`(`idRole`, `roleName`, `roleDesc`,`username`,`password`,`passhash`,`job`) VALUES (:idRole,:roleName,:roleDesc,:username,:password,:passhash,:job)");

$query->bindParam(":idRole", $idRole);
$query->bindParam(":roleName", $roleName);
$query->bindParam(":roleDesc", $roleDesc);
$query->bindParam(":password", $password);
$query->bindParam(":username", $username);
$query->bindParam(":passhash", $passhash);
$query->bindParam(":job", $job);

$query->execute();

$select = $db->prepare("SELECT count(roleMenuId) FROM tr_role_menu");
          $select->execute();
          $tampil = $select->fetchAll();
  foreach($tampil as $value){
    $ha = $value[0]+1;
    if($ha>=0 && $ha<=9){
        $rom = "ROM0".$ha;
    }else if($ha>=9 && $ha<=99){
        $rom = "ROM".$ha;
    }
}
foreach($idMenu as $ho){
    $hehe = $rom++;
$query1 = $db->prepare("INSERT INTO `tr_role_menu`(`roleMenuId`, `idRole`, `idMenu`) VALUES (:roleMenuId,:idRole,:idMenu)");
$query1->bindParam(":roleMenuId", $hehe);
$query1->bindParam(":idRole", $idRole);
$query1->bindParam(":idMenu", $ho);
$query1->execute();
}

header('location:?mmopilot=managerole');
?>