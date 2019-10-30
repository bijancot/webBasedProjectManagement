<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$name				= htmlentities($_POST['name']);
$email				= htmlentities($_POST['email']);
$homeAddress		= htmlentities($_POST['homeAddress']);
$whatsapp			= htmlentities($_POST['whatsapp']);
$facebook			= htmlentities($_POST['facebook']);
$skype  			= htmlentities($_POST['skype']);
$discord			= htmlentities($_POST['discord']);

$query = $db->prepare("INSERT INTO `mmo_users`(`idUser`, `roleId`, `name`, `email`, `isActive`, `createdBy`, `createdDate`, `updatedBy`, `lastUpdate`, `facebook`, `discord`, `skype`, `whatsapp`, `homeAddress`) VALUES('','1',:name,:email,'0','admin',NOW(),'','',:facebook,:discord,:skype,:whatsapp,:homeAddress)");

 $query->bindParam(":name", $name);
 $query->bindParam(":email", $email);
 $query->bindParam(":homeAddress", $homeAddress);
 $query->bindParam(":whatsapp", $whatsapp);
 $query->bindParam(":facebook", $facebook);
 $query->bindParam(":skype", $skype);
 $query->bindParam(":discord", $discord);
 $query->execute();
 header('location:?mmolog');


}
?>