<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$jobParent			= htmlentities($_POST['jobParent']);
$idItem				= htmlentities($_POST['item']);
$idOrder			= htmlentities($_POST['order']);
$idUser				= htmlentities($_POST['operator']);
$jobDescription		= htmlentities($_POST['jobDescription']); 
$time 				= htmlentities($_POST['time']);
$itemTarget			= htmlentities($_POST['itemTarget']);
$priority			= htmlentities($_POST['priority']);
//echo $parent 			= htmlentities($_POST['parent']);
$status = "1";
$cr = "admin";
$query = $db->prepare("INSERT INTO `mmo_job`(`idOperator`, `idOrder`, `jobParent` ,`idItem`, `jobDescription`, `jobStatus`, `time`, `itemTarget`, `priority`, `createdBy`) VALUES (:idOperator,:idOrder,:jobParent,:idItem,:jobDesc,:jobStatus,:time,:itemTarget,:priority,:createdBy)");

$query->bindParam(":idOperator",$idUser);
$query->bindParam(":idOrder",$idOrder);
$query->bindParam(":jobParent",$jobParent);
$query->bindParam(":idItem",$idItem);
$query->bindParam(":jobDesc",$jobDescription);
$query->bindParam(":jobStatus",$status);
$query->bindParam(":time",$time);
$query->bindParam(":itemTarget",$itemTarget);
$query->bindParam(":priority",$priority);
$query->bindParam(":createdBy",$cr);


 $query->execute();
 header('location:?mmopilot=managejob');
}
?>