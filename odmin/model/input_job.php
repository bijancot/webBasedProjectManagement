<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

echo $idJob				= htmlentities($_POST['idJob']);
echo $idItem			= htmlentities($_POST['item']);
echo $idOrder			= htmlentities($_POST['order']);
echo $idUser			= htmlentities($_POST['operator']);
echo $jobDescription	= htmlentities($_POST['jobDescription']); 
echo $time 				= htmlentities($_POST['time']);
echo $itemTarget		= htmlentities($_POST['itemTarget']);
echo $itemByTime		= $itemTarget/$time;
echo $priority			= htmlentities($_POST['priority']);

$query = $db->prepare("INSERT INTO `mmo_job`(`idJob`, `idOperator`, `idOrder`, `jobParent`, `idItem`, `jobDescription`, `jobStatus`, `time`, `itemTarget`, `itemByTime`, `priority`, `createdBy`, `createdDate`, `updateBy`, `updatedDate`) VALUES ('$idJob', '$idUser', '$idOrder', null , '$idItem', '$jobDescription', '0', '$time', '$itemTarget', '$itemByTime', '$priority', 'admin', NOW(), '', NOW())");

 // $query->bindParam(":idJob", $idJob);
 // $query->bindParam(":idItem", $idItem);
 // $query->bindParam(":idOrder", $idOrder);
 // $query->bindParam(":idUser", $idUser);
 // $query->bindParam(":timee", $time);
 // $query->bindParam(":itemTarget", $itemTarget);
 // $query->bindParam(":itemByTime", $itemByTime);
 // $query->bindParam(":priority", $priority);
 $query->execute();
 header('location:?mmopilot=managejob');
}
?>