<?php
extract($_POST);
include "connexion.php";
$con = getConnection();
 if (isset($_POST["sign"])) {
    $pass = sha1($pass);
    $email = htmlspecialchars($email);
    $sql = "INSERT INTO utilisateur(nom,mail,password)values('$nom','$email','$pass')";
    $ex = mysqli_query($con,$sql);
    if(!$ex){
        die(mysqli_error($con));
    $con -> close();
        
        echo
        '<div class="container text-center">echec</div>';
    }
    else{
            ?>
<script>
    window.open;
</script>
            <?php

 }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="todolist.css">
    <link rel="shortcut icon" href="digitalLogo1.png" type="image/x-icon">

    <script src="js/bootstrap.min.js"></script>
    <title>To Do List</title>

</head>
<body>
        <?php
        if(isset($_GET['test'])){
        echo '<div class="container text-center">echec</div>';

        }


?>
    <div class="suite suites " id="suite2">

        <form action="cible.php" class=" needs-validation" novalidate method="post" style="width: 50%;">
            <h2 class="h2"> Login </h2>

        <div class=" form-group">
            <label for="validationCustom01" class="form-label">
                Email or phone number
            </label>
            <input type="email" name="mail" class="form-control" id="validationCustom01" required placeholder="e-mail adress or phone number">
            <div class="invalid-feedback">
                Please choose a E-mail.
              </div>
              <div class="valid-feedback">
                good E-mail.
              </div>
        </div>
        <div class="form-group">
            <label for="validationCustom02">
                Password
            </label>
            <input type="password" name="password" class="form-control password" id="validationCustom02" 
            minlength="8"
            required placeholder="Password">
            <div class="invalid-feedback ">
                bad password
            </div>
            <div class="valid-feedback">
                good password
            </div>
        </div>
        <label for="remember"><input type="checkbox" class="form-check-input" name="remember" id="remember">Remember me?</label>
        <a href="#" class="nav-link " onclick="collap();">Sign-up?</a>
        <a href="resset.html" class="nav-link ">Forgot password?</a>
        <div class="suite">
            <input type="submit" value="Login" class="btn btn-success mt-3">
        </div>
    </form>
    </div>
    <div class="suite suites " id="suite">

        <form action="" class=" needs-validation" novalidate method="post" style="width: 50%; height: 600px;">
            <h2 class="h2"> Registration </h2>

        <div class=" form-group">
            <label for="validationCustom01" class="form-label">
                name
            </label>
            <input type="text" name="nom" class="form-control" id="validationCustom01" required placeholder="name">
            <div class="invalid-feedback">
                Please choose your name.
              </div>
              <div class="valid-feedback">
                good name.
              </div>
        </div>
        <div class=" form-group">
            <label for="validationCustom02" class="form-label">
                Email or phone number
            </label>
            <input type="email" name="email" class="form-control" id="validationCustom02" required placeholder="e-mail adress or phone number">
            <div class="invalid-feedback">
                Please choose a E-mail.
              </div>
              <div class="valid-feedback">
                good E-mail.
              </div>
        </div>
        <div class="form-group">
            <label for="validationCustom03">
                Password
            </label>
            <input type="password" name="pass" class="form-control password" id="validationCustom03" 
            minlength="8"
            required placeholder="Password">
            <div class="invalid-feedback ">
                bad password
            </div>
            <div class="valid-feedback">
                good password
            </div>
        </div>
        <div class="form-group">
            <label for="validationCustom04">
                Confirm Password
            </label>
            <input type="password" name="pass" class="form-control password" id="validationCustom04" 
            minlength="8"
            required placeholder="Confirm Password">
            <div class="invalid-feedback ">
                bad password
            </div>
            <div class="valid-feedback">
                good password
            </div>
        </div>
        
        <a href="#" class="nav-link " onclick="collap();">Login?</a>
        <div class="suite">
            <input type="submit" name="sign" value="Login" class="btn btn-success mt-3">
        </div>
    </form>
    </div>
    <script src="todolist.js"></script>
</body>
</html>