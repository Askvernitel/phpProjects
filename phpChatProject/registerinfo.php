

<?php
include("db_con.php");
include("query.php");
function validateFields(){
    if(isset($_POST["register"])){

        $f_name = htmlspecialchars($_POST["username"]);
        $f_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        
        
        if(!(empty($f_name) && empty($_POST["Password"]) && empty($f_email))){   
            if(connectToDatabase() == false){
                echo "FAILED TO CONNECT TO DATABASE";
            }else{
                registerQuery($f_name, $_POST["Password"], $f_email);
            }

        }
        else{
            echo"Fill Out Every Field Properly";
            
        }
    }else{
        echo "ERROR";
        
    }
}



?>