<?php
//require'../conn/koneksi.php';
$name				= htmlentities($_POST['name']);
$email				= htmlentities($_POST['email']);
$homeAddress		= htmlentities($_POST['homeAddress']);
$whatsapp			= htmlentities($_POST['whatsapp']);
$facebook			= htmlentities($_POST['facebook']);
$skype  			= htmlentities($_POST['skype']);
$discord			= htmlentities($_POST['discord']);
$password			= htmlentities($_POST['password']);
$passwordver		= htmlentities($_POST['passwordver']);
$passhash           = md5($password);

if($password!=$passwordver||empty($password)||empty($passwordver)){
    echo "<script type=\"text/javascript\">alert('Something wrong, check your password');document.location='?mmopilot=addadmin';</script>";
}else{
    $query = $db->prepare("INSERT INTO `mmo_users`(`name`, `email`, `isActive`, `createdBy`, `facebook`, `discord`, `skype`, `whatsapp`, `homeAddress`,`password`,`passhash`) VALUES(:name,:email,'3','admin',:facebook,:discord,:skype,:whatsapp,:homeAddress,:password,:passhash)");

 $query->bindParam(":name", $name);
 $query->bindParam(":email", $email);
 $query->bindParam(":homeAddress", $homeAddress);
 $query->bindParam(":whatsapp", $whatsapp);
 $query->bindParam(":facebook", $facebook);
 $query->bindParam(":skype", $skype);
 $query->bindParam(":discord", $discord);
 $query->bindParam(":password", $password);
 $query->bindParam(":passhash", $passhash);
 $query->execute();
//  var_dump($query->execute());
 echo "<script type=\"text/javascript\">alert('Success');document.location='?mmopilot';</script>";
 header('location:?mmopilot');
}
?>