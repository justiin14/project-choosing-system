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

    <div class="ap">
        <?php    
            $conn = mysqli_connect("localhost", "root", "", "web");
            $s=$_SESSION['ns'];

            $id=mysqli_query($conn,"SELECT id_user FROM useri WHERE nume_user='$s'");
            $row = mysqli_fetch_assoc($id);
            $noulid = $row['id_user'];

            if (isset($_POST['Proiect'])){
                $idproiect = $_POST['Proiect'];
                mysqli_query($conn,"INSERT INTO proiecte_alese (id_user,id_proiect) VALUES($noulid,$idproiect) ");
                mysqli_query($conn,"UPDATE proiecte SET ales=1 WHERE proiecte.id_proiect=$idproiect");
                unset($_POST);
                echo "<h4>Proiectul a fost ales cu succes!</h4>";
            }
            
        ?>
    
        <form method="post" action="AlegeProiect.php">

            <h1>Alege proiect</h1>

            <h3>Proiect</h3>
            <select name="Proiect">
            <option></option>

            <?php
	
	        $result = mysqli_query($conn, "SELECT id_proiect,proiect FROM proiecte WHERE ales=0");

	        while($row = mysqli_fetch_assoc($result)) {
		        echo '<option value="'. $row["id_proiect"]. "\">" .$row["proiect"]."</option>";
	        }
	        mysqli_close($conn);
            ?>
            
            </select> 
            <br>
            <input value="Alege" type="submit"> 
        </form>

    </div>

    </body>
    
</html>