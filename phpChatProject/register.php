<?php
    include("registerinfo.php")

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
        <div class="row justify-content-center" id="register">

            <h1 class="display">Register</h1>
        </div>
        <div class="row justify-content-center" id="form1">
            <form method ="post" action=<?php echo $_SERVER["PHP_SELF"]?> class="justify-content-center" id="form-register">
                <div class="form-group">
                    <label for="Name">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                    

                </div>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Username" required>
                    

                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" class="form-control" placeholder = "********" required>
                    <small><a href="login.php">Already Registered?</a></small>
                </div>
                <input type="submit" name="register" class="btn btn-primary" value="Register">

            </form>
        </div>
    </div>

    
</body>
</html>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
        validateFields();
  }
?>