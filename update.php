<?php
    $conn = mysqli_connect("localhost", "root", "", "web");

    $rez=$_POST['up'];
    $idproiect=$_POST['hid'];
    $query="UPDATE proiecte SET proiect='$rez' WHERE id_proiect='$idproiect'  ";
    mysqli_query($conn,$query);
    header("Location:ModificaProiecte.php");