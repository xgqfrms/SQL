<?php   
//PDO  

try{  
// $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '123456', options)   
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '123456');  
//$sql = <<< EOF  
//       CREATE TABLE IF NOT EXISTS users(  
//       id INT UNSIGNED AUTO_INCREMENT KEY,  
//       username VARCHAR(20) NOT NULL UNIQUE,  
//       password CHAR(32) NOT NULL,  
//       email VARCHAR(32) NOT NULL  
//         );  
// EOF;  
$sql = <<< EOF  
      CREATE TABLE IF NOT EXISTS pdo_users(  
      id INT(32) UNSIGNED AUTO_INCREMENT KEY,  
      username VARCHAR(255) NOT NULL UNIQUE,  
      password VARCHAR(255) NOT NULL,  
      email VARCHAR(255) NOT NULL UNIQUE,  
      token VARCHAR(255) NOT NULL UNIQUE,  
      token_expire INT(32) NOT NULL DEFAULT '0',  
      status tinyint(1) NOT NULL,  
      register_time VARCHAR(255) NOT NULL  
      );  
EOF;  
$res = $pdo->exec($sql);  

var_dump($res);  
echo "exec() ? num : 0 ".$res."\n<br/>";  

}catch(PDOException $e){  
   echo ($e->getMessage());  
}    
?> 
