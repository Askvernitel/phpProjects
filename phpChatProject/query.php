<?php
require_once("db_con.php");
/*
$conn = connectToDatabase();
$sql = "ALTER TABLE users MODIFY email NVARCHAR(100) UNIQUE";
$stmt = $conn->prepare($sql);

$stmt->execute();
*/
function registerQuery($name, $password, $email){
    $conn = connectToDatabase();

    if($conn){
        /*
        $stmt = "CREATE TABLE users(
            ID INT AUTO_INCREMENT PRIMARY KEY ,
            name NVARCHAR(30),
            password NVARCHAR(255),
            email NVARChAR(255)
        )";
        */
        $ins_data = "INSERT INTO users(name,password,email) VALUES(?, ?, ?)";
        $stmt = $conn->prepare($ins_data);

        $stmt->bind_param("sss", $name, $password , $email);
        if($stmt->execute() === TRUE){
            echo"connected";
        }else{  
            echo "ERROR";
        }

    }else{
        echo "SOMETHING WENT WRONG";
    }
}
function loginQuery($name, $password){
    $conn = connectToDatabase();

    if($conn){
        $stmt = "SELECT * FROM users WHERE name = '{$name}'";
        $result = $conn->query($stmt);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row["password"] == $password){
                echo "LOGGED IN ";
                return true;
            }else{
                echo "Not Loggeed IN";
                return false;
            }
        }

    }else{
        
        echo "SOMETHING WENT WRONG";
        return false;
    }



}
function getBalance($name){
    $conn = connectToDatabase();

    if($conn){
        $sql = "SELECT * FROM users WHERE name ='{$name}'";

        $result = $conn->query($sql);

        $fetchedResult = $result->fetch_assoc();
        return $fetchedResult["balance"];

    }else{
        echo "SOMETHING WENT WRONG";
    }

}
?>