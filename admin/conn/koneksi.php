<?php
 error_reporting(0);
	$host="172.17.0.3"; //host laptop bisa pakai 127.0.0.1 atau localhost
	$dbname="mmopilot"; // nama database
	$user="root"; // nama user dalam my sql
	$password="bijan2089"; // password user, jika kosong beri string kosong
	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
	  	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		if (!$db){
			echo "Koneksi Error";
		}else{
			echo "Koneksi Berhasil";
		}
	}

	catch(PDOException $STH){
	  echo "<br>".$STH->getMessage();
	}
//$base_url = "http://panjibaskoro.web.id/mmo/";
ini_set('display_errors',0); 
?>
