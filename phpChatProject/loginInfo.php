<?php
include("query.php");
function validateLogin(){
    session_start();
    if(isset($_POST["login"])){
        $name = $_POST["username"];
        $password = $_POST["Password"];
        if(loginQuery($name,$password)){
            $balance = getBalance($name); 
            $_SESSION["loggedin"] = true;
            $_SESSION["name"] = $name;
            $_SESSION["balance"] = $balance;
            header("Location: main.php");
            exit();
        }else{
            session_abort();
            echo "INCORRECT";
        }


    }

}
?>