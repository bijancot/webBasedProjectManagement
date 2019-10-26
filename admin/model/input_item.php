<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$itemName			= htmlentities($_POST['itemName']);
$itemDescription	= htmlentities($_POST['itemDescription']);
$itemLink			= htmlentities($_POST['itemLink']);
$itemIcon           =$_FILES['itemIcon']['name'];
$itemTmpIcon        =$_FILES['itemIcon']['tmp_name'];

var_dump($_FILES['itemIcon']);
echo $itemLoc = "images/".$itemIcon;

if(move_uploaded_file($itemTmpIcon,$itemLoc)){
    //$query = $db->prepare("INSERT INTO `mmo_item`(`itemName`, `itemDescription`, `itemIcon`, `itemLink`, `createdDate`, `lastUpdate`, `createdBy`, `editedBy`) VALUES (:idItem, :itemName, :itemDescription, '', :itemLink, NOW(), NOW(),'','')");
$query = $db->prepare("INSERT INTO `mmo_item`(`itemName`, `itemDescription`,`itemLink`,`itemIcon`) VALUES (:itemName, :itemDescription, :itemLink, :itemIcon)");

$query->bindParam(":itemName", $itemName);
$query->bindParam(":itemDescription", $itemDescription);
$query->bindParam(":itemLink", $itemLink);
$query->bindParam(":itemIcon", $itemLoc);
$query->execute();

header('location:?mmopilot=manageitem');
}
 
 
}
?>