<?php
    $idRole = htmlentities($_GET['idRole']);
    
    $query = $db->prepare("DELETE FROM tr_role_menu where idRole=:idRole");
    $query->bindParam(":idRole", $idRole);

    $query->execute();
    
    $query = $db->prepare("DELETE FROM mmo_role where idRole=:idRole");
    $query->bindParam(":idRole", $idRole);

    $query->execute();

    header('location:?mmopilot=managerole');
?>