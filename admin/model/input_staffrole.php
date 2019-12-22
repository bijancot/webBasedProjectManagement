<?php
$role = $_POST['role'];
$id = $_GET['id'];

$query = $db->prepare("UPDATE mmo_users SET 
						roleId = $role
						WHERE idUser=$id");

 $query->execute();
 header('location:?mmopilot=managestaff');
?>