<?php

//block direct URL access  to config.php & prevent db exposure
// if(!isset($_SERVER['HTTP_REFERER'])){
//     header('Location:../index.php');
//     exit(); // Ensure script stops after redirec
// }

try {
//host
define("HOST","localhost");

//dbnamey
define("DBNAME","freshcery");

//User
define("USER","root");


//pass
define("PASS","");


$conn=new PDO("mysql:host=".HOST.";dbname=".DBNAME.";" ,USER ,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// if($conn == true ){
//     echo "connected successfully";
// }else{
//     echo "error";
// }

} catch (PDOException $e) {
    echo $e->getMessage();
}
