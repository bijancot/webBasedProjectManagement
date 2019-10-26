<?php
if(isset($_POST['submit'])){

    echo $idRole= htmlentities($_POST['idRole']);
    $roleName= htmlentities($_POST['roleName']);
    $roleDesc= htmlentities($_POST['roleDesc']);
    $usernameRole= htmlentities($_POST['usernameRole']);
    $passwordRole= htmlentities($_POST['passwordRole']);
    $job= htmlentities($_POST['job']);
    $passHash = md5($passwordRole);
    $idMenu = $_POST['menuList'];
    var_dump($idMenu);

    $update = $db->prepare("UPDATE mmo_role SET
            `roleName`=:roleName,
            `roleDesc`=:roleDesc,
            `username`=:username,
            `password`=:password,
            `job`=:job,
            `status`='1',
            `passHash`=:passHash 
            WHERE idRole=:idRole");

    $update->bindParam(":idRole", $idRole);
    $update->bindParam(":roleName", $roleName);
    $update->bindParam(":roleDesc", $roleDesc);
    $update->bindParam(":username", $usernameRole);
    $update->bindParam(":password", $passwordRole);
    $update->bindParam(":job", $job);
    $update->bindParam(":passHash", $passHash);
    $update->execute();


    $delete = $db->prepare("DELETE FROM tr_role_menu where idRole=:idRole");
    $delete->bindParam(":idRole", $idRole);
    $delete->execute();

foreach($idMenu as $ho){
    $hehe = $rom++;
$query1 = $db->prepare("INSERT INTO `tr_role_menu`(`roleMenuId`, `idRole`, `idMenu`) VALUES (:roleMenuId,:idRole,:idMenu)");
$query1->bindParam(":roleMenuId", $hehe);
$query1->bindParam(":idRole", $idRole);
$query1->bindParam(":idMenu", $ho);
$query1->execute();
}

header('location:?mmopilot=managerole');
};
?>