<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

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

 // $select = $db->prepare("SELECT idJob FROM mmo_job where idOrder=$idOrder");
 // $select->execute();
 // $tampil = $select->fetchAll();
 
 // foreach ($tampil as $key) {
 //     echo $idid = $key['idJob'];
 // }
 // $quer2 = $db->prepare("UPDATE mmo_operator_shift set idJob=:idJob where idOrder=:idOrder");

 // $quer2->bindParam(":idJob", $idid);
 // $quer2->bindParam(":idOrder", $idOrder);
 // $quer2->execute();
 //NB : SORRY TAK KOMEN TAPI TAK CEK GAK JALAN
 echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?mmopilot=managejob';</script>"
}
?>