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
$password			= htmlentities($_POST['password']);
$passwordver		= htmlentities($_POST['passwordver']);
$passhash           = md5($password);

if($password!=$passwordver||empty($password)||empty($passwordver)){
    echo "<script type=\"text/javascript\">alert('Something wrong, check your password');document.location='?register';</script>";
}else{
    $query = $db->prepare("INSERT INTO `mmo_users`(`roleId`, `name`, `email`, `isActive`, `createdBy`, `facebook`, `discord`, `skype`, `whatsapp`, `homeAddress`,`password`,`passhash`) VALUES('41',:name,:email,'1','admin',:facebook,:discord,:skype,:whatsapp,:homeAddress,:password,:passhash)");

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
 header('location:?mmolog');
}
}
?>