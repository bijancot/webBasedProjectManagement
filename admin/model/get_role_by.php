<?php
    $kolo = $_GET['idRole'];
    $ko = $db->prepare("select a.roleName,a.roleDesc,group_concat(c.menuName) as \"MenuList\",a.createdDate,a.createdBy from mmo_role a join tr_role_menu b on a.idRole = b.idRole join mmo_menu c on b.idMenu=c.idMenu where a.idRole== :idrole group by a.idRole");
    $ko->bindParam(":idrole",$kolo);
    $ko->execute();
    $hasil = $ko->fetchAll(PDO::FETCH_OBJ);

    // while($hasil){
    //     echo $hasil->roleName;
    // }
?>