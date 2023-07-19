<?php
    session_start();
    if  (isset($_SESSION['na'])&&isset($_SESSION['pna'])&&isset($_SESSION['pa'])) {
    }   
    else{
        header("Location:Conectare.php");
        exit();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" >
        <meta charset="UTF-8">
        <title>Prof view</title>
    </head>

    <body>

    <header>
        <div class="container">

            <img src="logo.jpg" height=70 width=200 alt="logo">

            <nav>
                <ul>
                    <li><a href="HomeP.php">Proiecte alese</a></li>
                    <li><a href="ModificaProiecte.php">Modifică proiecte</a></li>
                    <li><a href="logout.php">Deconectare</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <div class="page">
    <h1>Proiecte alese</h1><br>
    <table>
        <tr>
            <th>Nr.</th>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Grupa</th>
            <th>Temă proiect</th>
        </tr>
    <?php
            $conn = mysqli_connect("localhost", "root", "", "web");

            $result = mysqli_query($conn, "SELECT nume_user, prenume_user, grupa, proiect FROM proiecte_alese JOIN useri JOIN proiecte JOIN grupe 
            WHERE proiecte.id_proiect=proiecte_alese.id_proiect && proiecte_alese.id_user=useri.id_user && useri.id_grupa=grupe.id_grupa ORDER BY grupa ");

            $ct=1;
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>".$ct.".</th>";
                echo "<th>".$row["nume_user"]."</th>";
                echo "<th>".$row["prenume_user"]."</th>";
                echo "<th>".$row["grupa"]."</th>";
                echo "<th>".$row["proiect"]."</th>";
                echo "</tr>";
                $ct++;
            }
        ?>
    </table>
        <form method="post" action="HomeP..php">
            <p>Ordonare după:</p>
            <input type="text" value="Nume">
            <input type=submit value="Ordonare">
        </form>
    </div>

    </body>
</html>

<?php

?>
