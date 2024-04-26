<?php
session_start();

$error_message = "Ondo"; 

if (isset($_POST['erabiltzailea']) && isset($_POST['pasahitza'])) {

    $servername = "localhost";
    $username = $_POST['erabiltzailea'];
    $password = $_POST['pasahitza'];
    $db = "MIMI";

    $mysqli = new mysqli($servername, $username, $password, $db);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
        echo '<script>
               alert("Erabiltzaile edo pasahitza txarto sartu duzu");
               window.location.href = "login.php";
            </script>';
        
    } else {
        header("Location: langileak.php");
        exit;
    }

    $mysqli->close();
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="shortcut icon" href="../../irudiak/logoa/logoa_karratu.png">
    <title>MIMI</title>
</head>
<body>
<main>
    <div class="kutxa">
        <a href="../../index.html">
            <img id="buelta" src="../../irudiak/login/cross-svgrepo-com.svg" alt="buelta">
        </a>
        <h1>Login</h1>
        <form id="userform" action="login.php" method="POST">
            <div class="userkutxa">
                <img src="../../irudiak/login/profile-svgrepo-com.svg" alt="erabiltzailea">
                <label for="erabiltzailea">Erabiltzailea</label> <br>
            </div>
            <input type="text" id="erabiltzailea" name="erabiltzailea"> <br>
            <div class="userkutxa">
                <img src="../../irudiak/login/padlock-svgrepo-com.svg" alt="pasahitza">
                <label for="pasahitza">Pasahitza</label> <br>
            </div>
            <input type="password" id="pasahitza" name="pasahitza">

            <?php
              // Mostrar el mensaje de error si existe
              if (!empty($error_message)) {
                echo '<p style="color: yellow; text-align: center; font-weigth: bold;">' . $error_message . '</p>';
              }
            ?>
            <br>
            <input type="submit" id="jarraitu" value="Jarraitu">
        </form>
    </div>
</main>
</body>
</html>
