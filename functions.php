<?php

function emptyInputSignup($name,$pname,$group,$pwd,$pwd2){
    $result;
    if(empty($name)||empty($pname)||empty($group)||empty($pwd)||empty($pwd2)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidName($name,$pname){
    $result;
    if(!preg_match("/^[a-zA-Z]*$/",$name)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd,$pwd2){
    $result;
    if($pwd!==$pwd2){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}


function createUser($conn,$name,$pname,$group,$pwd){
    $name=htmlentities($name);
    $pname=htmlentities($pname);
    $group=htmlentities($group);
    $pwd=htmlentities($pwd);

    mysqli_query($conn,"INSERT INTO useri (nume_user, prenume_user, parola, id_grupa) VALUES (\"$name\", \"$pname\", \"$pwd\", $group)");

    header("Location:Conectare.php?erorr=none");
    exit();
}

function emptyInputLogin($name,$pname,$pwd){
    $result;
    if(empty($name)||empty($pname)||empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn,$name,$pname,$pwd){
    $sql="SELECT nume_user,prenume_user,parola FROM useri WHERE nume_user='$name' AND prenume_user='$pname' AND parola='$pwd'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
    

    if($row!=null){ 
        $_SESSION['ns']=$row['nume_user'];
        $_SESSION['pns']=$row['prenume_user'];
        $_SESSION['ps']=$row['parola'];
        $_SESSION['gr']=$row['id_grupa'];
        header("Location:HomeS.php");
    }
    else{
        header("Location:Conectare.php");
    }
}