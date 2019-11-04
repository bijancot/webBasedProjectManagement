<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

echo $idItem				= htmlentities($_POST['item']);
echo $idOrder			= htmlentities($_POST['order']);
echo $idUser				= htmlentities($_POST['operator']);
echo $jobDescription		= htmlentities($_POST['jobDescription']); 
echo $time 				= htmlentities($_POST['time']);
echo $itemTarget			= htmlentities($_POST['itemTarget']);
echo $priority			= htmlentities($_POST['priority']);
//echo $parent 			= htmlentities($_POST['parent']);
$status = "1";
$cr = "admin";
$query = $db->prepare("INSERT INTO `mmo_job`(`idOperator`, `idOrder`, `idItem`, `jobDescription`, `jobStatus`, `time`, `itemTarget`, `priority`, `createdBy`) VALUES (:idOperator,:idOrder,:idItem,:jobDesc,:jobStatus,:time,:itemTarget,:priority,:createdBy)");

$query->bindParam(":idOperator",$idUser);
$query->bindParam(":idOrder",$idOrder);
//$query->bindParam(":jobParent",$parent);
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