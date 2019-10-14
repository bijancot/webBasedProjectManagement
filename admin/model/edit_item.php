<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idItem			= htmlentities($_GET['id']);
$itemName		= htmlentities($_POST['itemName']);
$itemDescription= htmlentities($_POST['itemDescription']);
$itemLink		= htmlentities($_POST['itemLink']);


$query = $db->prepare("UPDATE `mmo_item` SET 
		`itemName`= :itemName,
		`itemDescription`= :itemDescription,
		`itemLink`= :itemLink,
		`lastUpdate`=NOW()
		WHERE `idItem`=:idItem");

 $query->bindParam(":idItem", $idItem);
 $query->bindParam(":itemName", $itemName);
 $query->bindParam(":itemDescription", $itemDescription);
 $query->bindParam(":itemLink", $itemLink);
 $query->execute();
 header('location:?mmopilot=manageitem');

}
?>