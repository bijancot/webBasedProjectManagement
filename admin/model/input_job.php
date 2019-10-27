<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idJob				= htmlentities($_POST['idJob']);
$idItem				= htmlentities($_POST['item']);
$idOrder			= htmlentities($_POST['order']);
$idUser				= htmlentities($_POST['operator']);
$jobDescription		= htmlentities($_POST['jobDescription']); 
$time 				= htmlentities($_POST['time']);
$itemTarget			= htmlentities($_POST['itemTarget']);
$itemByTime			= $itemTarget/$time;
$priority			= htmlentities($_POST['priority']);

$query = $db->prepare("INSERT INTO `mmo_job`(`idJob`, `idOperator`, `idOrder`, `jobParent`, `idItem`, `jobDescription`, `jobStatus`, `time`, `itemTarget`, `itemByTime`, `priority`, `createdBy`, `createdDate`, `updateBy`, `updatedDate`) VALUES ('$idJob', '$idUser', '$idOrder', null , '$idItem', '$jobDescription', '0', '$time', '$itemTarget', '$itemByTime', '$priority', 'admin', NOW(), '', NOW())");

 $query->execute();
 header('location:?mmopilot=managejob');
}
?>