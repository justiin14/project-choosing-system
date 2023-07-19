<?php
    session_start();
    if  (isset($_SESSION['ns'])&&isset($_SESSION['pns'])&&isset($_SESSION['ps'])) {
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
        <title>Home page</title>
    </head>

    <body>
    
    <header>
        <div class="container">

            <img src="logo.jpg" height=70 width=200 alt="logo">

            <nav>
                <ul>
                    <li><a href="HomeS.php">Proiecte</a></li>
                    <li><a href="AlegeProiect.php">Alege proiect</a></li>
                    <li><a href="logout.php">Deconectare</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <div class="page">
        <h1>Teme de proiect</h1>
        <br>
        <table>
        <tr>
            <th>Nr.</th>
            <th>Temă proiect</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "web");

            $result = mysqli_query($conn, "SELECT id_proiect, proiect FROM proiecte");
            $id=1;
            
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$id.".</td>";
                echo "<td>".$row["proiect"]."</td>";
                echo "</tr>";
                $id++;
            }
        ?>
        </table>
        <br>
        <p>Proiectul trebuie să respecte următoarele <a href="http://webspace.ulbsibiu.ro/radu.kretzulescu/html/cursweb10/Cerinte_pentr_proiect.pdf" target="_blank">cerințe.</a></p>
    </div>

    </body>
    
</html>