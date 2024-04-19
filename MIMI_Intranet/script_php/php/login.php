<?php
session_start();

$error_message = ""; // Variable para almacenar el mensaje de error

if (isset($_POST['erabiltzailea']) && isset($_POST['pasahitza'])) {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db_ElorrietaZinemaT4";

    // Konexioa sortu
    $mysqli = new mysqli($servername, $username, $password, $db);

    // Konexioa egiaztatu
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Kontsulta
    $erabiltzailea = $_POST["erabiltzailea"];
    $pwd = $_POST["pasahitza"]; 

    $sql = "SELECT idBezero FROM bezeroa WHERE erabiltzailea = '$erabiltzailea' AND pasahitza = '$pwd'";
    
    // Kontsulta egin db
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['erabiltzailea'] =  $erabiltzailea;
        header("Location: sarrerak.php");
        exit;
    } else {
        // Mostrar un mensaje de error si la autenticación falla
        $error_message = "Pasahitza edo erabiltzailea ez dira zuzenak";
    }

    // Konexioa itxi
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../html/logoa/logoa_karratu.png">
    <title>PHIM Zinemak</title>
</head>
<body>
<main>
    <div class="kutxa">
        <a href="../html/index.html">
            <img id="buelta" src="../html/irudiak/login/cross-svgrepo-com.svg" alt="buelta">
        </a>
        <h1>Login</h1>
        <form id="userform" action="login.php" method="POST">
            <div class="userkutxa">
                <img src="../html/irudiak/login/profile-svgrepo-com.svg" alt="erabiltzailea">
                <label for="erabiltzailea">Erabiltzailea</label> <br>
            </div>
            <input type="text" id="erabiltzailea" name="erabiltzailea"> <br>
            <div class="userkutxa">
                <img src="../html/irudiak/login/padlock-svgrepo-com.svg" alt="pasahitza">
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
