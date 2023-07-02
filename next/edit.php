<?php
session_start();
if($_SESSION['id']){
    include 'connexion.php';
    $con = getConnection();
    $date = date("Y/m/j");
    $id = $_SESSION['id'];
    extract($_POST);
    if (isset($submit)) {
        $req = "INSERT INTO taches(id_user,description,date_pub)values($id,'$desc','$date')";
        $result = mysqli_query($con,$req);
        if (!$result) {
            # code...
            die(mysqli_error($con));
        }
    }
   
    $sql = "SELECT * FROM taches WHERE  date_pub='$date' AND id_user = $id";
    $ex = mysqli_query($con,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="todolist.css"> -->
    <script src="js/bootstrap.min.js"></script>
    <title>Edit</title>
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
    <form class="d-flex flex-column flex-sm-row w-100 gap-2"  method="post">
        <input type="text" name="desc" require minlength="5" class="form-control" style="width: 50%;" placeholder="description do activity">
        <input type="submit" name="submit" class="btn btn-success" value="Save">

    </form>
        <h3>Edit your today's program <a href="#" class="btn btn-secondary">Edit now</a></h3> 
    </div>
    <div class="h2">Today's program list</div>
    <table class="table">
        <thead>
            <tr>
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