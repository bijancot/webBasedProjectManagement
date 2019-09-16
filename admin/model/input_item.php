<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idItem				= htmlentities($_POST['idItem']);
$itemName			= htmlentities($_POST['itemName']);
$itemDescription	= htmlentities($_POST['itemDescription']);
$itemLink			= htmlentities($_POST['itemLink']);
// $createdDate		= date("Y-m-d H:i:s");
// $lastUpdate			= date("Y-m-d H:i:s");


$query = $db->prepare("INSERT INTO `mmo_item`(`idItem`, `itemName`, `itemDescription`, `itemIcon`, `itemLink`, `createdDate`, `lastUpdate`, `createdBy`, `editedBy`) VALUES (:idItem, :itemName, :itemDescription, '', :itemLink, NOW(), NOW(),'','')");

 $query->bindParam(":idItem", $idItem);
 $query->bindParam(":itemName", $itemName);
 $query->bindParam(":itemDescription", $itemDescription);
 $query->bindParam(":itemLink", $itemLink);
 // $query->bindParam(":createdDate", $createdDate);
 // $query->bindParam(":lastUpdate", $lastUpdate);
 $query->execute();
 header('location:?mmopilot=managejob');
}
?>