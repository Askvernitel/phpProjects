

<?php
include("register.php");

if(isset($_POST["register"])){
    if(!(empty($_POST["name"]) && empty($_POST["password"]) && empty($_POST["email"]))){
        echo"congrats";
    }
    else{
        echo"Error";
    }
}else{
    echo "Something went wrong ";
}



?>