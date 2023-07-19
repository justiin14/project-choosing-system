<?php

if (isset($_POST["inregistrare"])){
    $name=$_POST["nume"];
    $pname=$_POST["prenume"];
    $group=$_POST["grupa"];
    $pwd=$_POST["parola"];
    $pwd2=$_POST["parola2"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputSignup($name,$pname,$group,$pwd,$pwd2)!== false){
        header("Location:Inregistrare.php?error=emptyinput");
        exit();
    }

    if(invalidName($name,$pname)!== false){
        header("Location:Inregistrare.php?error=invalidinput");
        exit();
    }

    if(pwdMatch($pwd,$pwd2)!== false){
        header("Location:Inregistrare.php?error=passmatch");
        exit();
    }

    createUser($conn,$name,$pname,$group,$pwd);

}
else{
    header("Location:Inregistrare.php");
    exit();
}