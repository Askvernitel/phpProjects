<?php
    include("loginInfo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <div class="container ">
        <div class="row justify-content-center" id="login">

            <h1 class="display">Log In</h1>
        </div>
        <div class="row justify-content-center" id="form1">
            <form method ="post" action=<?php echo $_SERVER["PHP_SELF"]?> class="justify-content-center" id="form-login">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Username">
                    

                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" class="form-control" placeholder = "********">
                    <small class=""><a href="register.php">Not Registered Yet?</a></small>
                </div>
                <input type="submit" name="login" class="btn btn-primary" value="Log In">

            </form>
        </div>
    </div>


</body>

</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        validateLogin();
    }
?>
    