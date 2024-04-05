<?php
ini_set("display_errors",1);
function connectToDatabase(){
    
    $serverName = "localhost";
    $dbName = "Userdata";
    $dbPassword = "";
    $username = "root";

    $conn = new mysqli($serverName,$username,$dbPassword,$dbName,);


    if($conn->connect_error){
        return false;
       
    }
    
    echo"CONNECTED";
    return $conn;
}
?>