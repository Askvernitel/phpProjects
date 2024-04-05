<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION === FALSE ){
    header("Location: login.php");
    session_abort();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <script src="index.js"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div>
            <a href="" class="navbar-brand text-light" style="font-size:30px"><?php echo $_SESSION["name"]?></a>
            <span class="nav-item text-light" style="font-size:30px; margin-right:10px"> Balance: <?php echo $_SESSION["balance"]?> $</span>
        </div>   
        <div class="justify-content-between d-flex ">
            <button class="btn nav-link" onclick="logOut()">Log Out</button>
        </div>
    </nav>
</body>
</html>
<?php



?>