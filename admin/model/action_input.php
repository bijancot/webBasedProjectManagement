<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idJob			= htmlentities($_POST['idJob']);
$idItem			= htmlentities($_POST['item']);
$jobDescription	= htmlentities($_POST['jobDescription']);
$time 			= htmlentities($_POST['time']);
$itemTarget		= htmlentities($_POST['itemTarget']);
$itemByTime		= $itemByTime/$time;
$priority		= htmlentities($_POST['priority']);

$query = $db->prepare("INSERT INTO `mmo_job`(`idJob`, `idOperator`, `idOrder`, `jobParent`, `idItem`, `jobDescription`, `jobStatus`, `time`, `itemTarget`, `itemByTime`, `priority`, `createdBy`, `createdDate`, `updateBy`, `updatedDate`) VALUES (:idJob, '', '', '', :idItem, :jobDescription, '', :timee, :itemTarget, :itemByTime, :priority, '', '', '','')");

 $query->bindParam(":idJob", $idJob);
 $query->bindParam(":idItem", $idItem);
 $query->bindParam(":timee", $time);
 $query->bindParam(":itemTarget", $itemTarget);
 $query->bindParam(":itemByTime", $itemByTime);
 $query->bindParam(":priority", $priority);
 $query->execute();
}
?>