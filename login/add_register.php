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

$query = $db->prepare("INSERT INTO `mmo_users`(`name`, `email`, `isActive`, `createdBy`, `facebook`, `discord`, `skype`, `whatsapp`, `homeAddress`) VALUES(:name,:email,'1','admin',:facebook,:discord,:skype,:whatsapp,:homeAddress)");

 $query->bindParam(":name", $name);
 $query->bindParam(":email", $email);
 $query->bindParam(":homeAddress", $homeAddress);
 $query->bindParam(":whatsapp", $whatsapp);
 $query->bindParam(":facebook", $facebook);
 $query->bindParam(":skype", $skype);
 $query->bindParam(":discord", $discord);
 $query->execute();
//  var_dump($query->execute());
 header('location:?mmolog');


}
?>