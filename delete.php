<?php
    $conn = mysqli_connect("localhost", "root", "", "web");

    $rez=$_GET['rn'];
    $query="DELETE FROM proiecte WHERE proiect='$rez'";
    mysqli_query($conn,$query);
    header("Location:ModificaProiecte.php");

