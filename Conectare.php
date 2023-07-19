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
        <h1>Conectare</h1>
        <form method="post" action="login.inc.php">
            <p>Nume</p>
            <input type="text" name="num" placeholder="Introduceți numele">
            <p>Prenume</p>
            <input type="text" name="pnum" placeholder="Introduceți prenumele">
            <p>Parolă</p>
            <input type="password" name="parola" placeholder="Introduceți parola">
            <br><br>
            <input type="submit" name="conectare" value="Conectare">
            <a href="Inregistrare.php">Nu aveți un cont încă?</a>
        </form>
        <br>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<h3>Completați toate câmpurile!</h3>";
                }
            }
        ?>
    </div>

    </body>
</html>