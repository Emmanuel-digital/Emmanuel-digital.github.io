<?php
session_start();
$mail = $_POST['mail'];
$password = sha1($_POST['password']);
include "connexion.php";
$con = getConnection();
    $sql = "SELECT * FROM utilisateur where mail='$mail'";
    $ex = mysqli_query($con,$sql);
    if(!$ex){
        header('location:index.php?test');
    }
    else{
        $tab = mysqli_fetch_assoc($ex);
        $p = $tab['password'];
            if($password != $p){
                header('location:index.php?test');

        }
        else{
            $_SESSION['id']=$tab['id'];

            header('location:todo.php');
        }
        
    }
    $con -> close();
