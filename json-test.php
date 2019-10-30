<?php
    	$host="192.168.79.3"; //host laptop bisa pakai 127.0.0.1 atau localhost
        $dbname="mmopilot"; // nama database
        $user="budosen"; // nama user dalam my sql
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
    $base_url = "http://localhost:8983/";

    $query = $db->prepare("SELECT idRole FROM mmo_role");
        
    $query->execute();
        $result = $query->fetchAll();
        // var_dump($result);

    //     $kolo =array($result);
    // echo json_encode($kolo);
        $data[]="panji";
    foreach ($result as $kolo ) {
        $data[] = $kolo['idRole'];
    }
    echo json_encode($data);
    echo json_encode($result);
?>