<?php
session_start();
if($_SESSION['id']){
    include 'connexion.php';
    $con = getConnection();
    
    $date = date("Y/m/j");
    $sql = "SELECT * FROM taches WHERE date_pub != '$date' AND id_user = $_SESSION[id]";
    $ex = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="todolist.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Todo</title>
    <link rel="shortcut icon" href="digitalLogo1.png" type="image/x-icon">
</head>
<body>
    <?php
    include "tete.html";
    if(!$ex)
    {
        die(mysqli_error($con));
    }
    ?>
    <div class="container-fluid justify-content-between text-center" style="margin-top: 210px;">
        <h3>Save your today's program <a href="edit.php" class="btn btn-secondary">Save now</a></h3> 
    </div>
    <h2 class="text-center">The program of the previous days</h2>
    <h5>The date of today: 
    <?php
    echo date('j/m/Y')
    ?>
    </h5>

    <table class="table">
        <thead>
            <tr>
                <th class="">Date</th>
                <th class="table-item">Activities list</th>
                <th class="table-item">Status</th>
                <th class="table-item">actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
    
    if(!$ex)
    {
        die(mysqli_error($con));
    }
    else{
        while ($row = mysqli_fetch_assoc($ex)) {
            echo '
            <tr>
                <td class="">'.$row['date_pub'].'</td>
                <td class="table-item">'.$row['description'].'</td>
                <td class="table-item">'.$row['etat'].'</td>
                <td class="table-item"><a href="#" class="btn btn-danger">Delete</a><a href="#" class="btn btn-success">Reschedule for today</a></td>
            </tr>
            ';
        }
    }
    ?>
        </tbody>
    </table>
    <?php
    include "footer.html";
    ?>
</body>
</html>
<?php
}
else {
    header('location:index.php');
}
$con -> close();
?>