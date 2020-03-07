<?php
if(isset($_POST['submit'])){
echo $idJob				= htmlentities($_POST['idJob']);
echo $idOperator		= htmlentities($_POST['idOperator']);
echo $progressDate		= htmlentities($_POST['progressDate']);
echo $itemAchived		= htmlentities($_POST['itemAchived']);
echo $progressNote		= htmlentities($_POST['progressNote']);

$query = $db->prepare("INSERT INTO `mmo_job_progress`(`idJob`, `idOperator`, `itemArchived`, `progressDate`, `progressDesc`) VALUES(:idJob,:idOperator,:itemAchived,:progressDate,:progressNote)");

$query->bindParam(":idJob",$idJob);
$query->bindParam(":idOperator",$idOperator);
$query->bindParam(":progressDate",$progressDate);
$query->bindParam(":itemAchived",$itemAchived);
$query->bindParam(":progressNote",$progressNote);

$query->execute();

echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?mmopilot=jobprogress';</script>";
}
?>
