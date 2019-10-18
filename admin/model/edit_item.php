<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idItem			= htmlentities($_GET['id']);
$itemName		= htmlentities($_POST['itemName']);
$itemDescription= htmlentities($_POST['itemDescription']);
$itemLink		= htmlentities($_POST['itemLink']);
$itemIcon   	= $_FILES['itemIcon']['name'];

move_uploaded_file($file_tmp, 'gambar/'.$itemIcon);
$query = $db->prepare("UPDATE `mmo_item` SET 
		`itemName`= :itemName,
		`itemDescription`= :itemDescription,
		`itemIcon`= :itemIcon,
		`itemLink`= :itemLink,
		`lastUpdate`=NOW()
		WHERE `idItem`=:idItem");

 $query->bindParam(":idItem", $idItem);
 $query->bindParam(":itemName", $itemName);
 $query->bindParam(":itemDescription", $itemDescription);
 $query->bindParam(":itemLink", $itemLink);
 $query->bindParam(":itemIcon", $itemIcon);
 $query->execute();
 header('location:?mmopilot=manageitem');

}
?>