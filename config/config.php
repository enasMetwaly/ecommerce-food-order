<?php

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
