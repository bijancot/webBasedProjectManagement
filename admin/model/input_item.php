<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idItem				= htmlentities($_POST['idItem']);
$itemName			= htmlentities($_POST['itemName']);
$itemDescription	= htmlentities($_POST['itemDescription']);
$itemLink			= htmlentities($_POST['itemLink']);



$query = $db->prepare("INSERT INTO `mmo_item`(`idItem`, `itemName`, `itemDescription`, `itemIcon`, `itemLink`, `createdDate`, `lastUpdate`, `createdBy`, `editedBy`) VALUES (:idItem, :itemName, :itemDescription, '', :itemLink, NOW(), NOW(),'','')");

 $query->bindParam(":idItem", $idItem);
 $query->bindParam(":itemName", $itemName);
 $query->bindParam(":itemDescription", $itemDescription);
 $query->bindParam(":itemLink", $itemLink);
 $query->execute();
 header('location:?mmopilot=manageitem');
}
?>