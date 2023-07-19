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
        <h1>Listă proiecte</h1>

        <table>
        <tr>
            <th>Nr.</th>
            <th>Tema</th>
            <th>Eliminare</th>
            <th>Actualizare</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "web");

            if (isset($_POST['pr'])){
                $proiect = $_POST['pr'];
                mysqli_query($conn,"INSERT INTO proiecte (proiect) VALUES(\"$proiect\")");
                unset($_POST);
            }

            $result = mysqli_query($conn, "SELECT id_proiect,proiect FROM proiecte");
            $ct=1;
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>".$ct.".</th>";
                echo "<th>".$row["proiect"]."</th>";
                echo "<th> <a href='delete.php?rn=$row[proiect]'>x</a></th>";
                echo "<th> 
                <form method='post' action='update.php'>
                    <input type='text' name='up'>
                    <input value='✓' type='submit'>
                    <input type='hidden' name='hid' value=".$row['id_proiect'].">
                </form>
                </th>";
                echo "</tr>";
                $ct++;
            }
        ?>
        </table>
        <br><br>
        <form method="post" action="ModificaProiecte.php">
            <p>Adăugați un nou proiect:</p>
            <input type="text" name="pr">

            <input value="Adaugă" type="submit">
        </form>

        </div>

    </body>
</html>