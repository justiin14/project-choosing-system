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
                    <li><a href="Home.php">Acasă</a></li>
                    <li><a href="Conectare.php">Conectare</a></li>
                    <li><a href="Inregistrare.php">Înregistrare</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="login">
        <img src="avatar.png" class="avatar" alt="poza avatar">
        <h1>Înregistrare</h1>
        <form action="signup.inc.php" method="post">
            <p>Nume</p>
            <input type="text" name="nume" placeholder="Introduceți numele">
            <p>Prenume</p>
            <input type="text" name="prenume" placeholder="Introduceți prenumele">
            <p>Grupa</p>
            <input type="text" name="grupa" placeholder="Introduceți grupa">
            <p>Parolă</p>
            <input type="password" name="parola" placeholder="Introduceți parola">
            <p>Reintroduceți parola</p>
            <input type="password" name="parola2" placeholder="Introduceți parola">
            <input type="submit" name="inregistrare" value="Înregistrare">
        </form>

        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<h3>Completați toate câmpurile!</h3>";
            }
            else if($_GET["error"] == "invalidinput"){
                echo "<h3>Nume/prenume invalid!</h3>";
            }
            else if($_GET["error"] == "passmatch"){
                echo "<h3>Introduceți aceeași parolă!</h3>";
            }
            else{
                echo "<h3>V-ați conectat cu succes!</h3>";
            }
        }
        ?>

    </div>
    
    </body>
</html>