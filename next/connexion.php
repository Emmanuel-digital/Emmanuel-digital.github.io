<?php
function getConnection(){
    $con = new mysqli("localhost","root","","todo");
if(!$con)
{
    die(mysqli_error($con));
}
else{
    return $con;
}
}


?>