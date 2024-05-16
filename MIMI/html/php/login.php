<?php
// Saioa hasi
session_start();

// Post datuak bidaltzen direnean
if (isset($_POST['erabiltzailea']) && isset($_POST['pasahitza'])) {

    $servername = "localhost";
    $username = $_POST['erabiltzailea'];
    $password = $_POST['pasahitza'];
    $db = "MIMI";

    // Mysqli objektua sortzen da
    $mysqli = new mysqli($servername, $username, $password, $db);

    // Konexioa egiaztatu
    if ($mysqli->connect_error) {
        // Konexioak huts egin badu, errorea pantailaratu eta login orrira bidali
        die("Connection failed: " . $mysqli->connect_error);
        echo '<script>
               alert("Erabiltzaile edo pasahitza txarto sartu duzu");
               window.location.href = "login.php";
            </script>';
        
    } else {
        // Konexioa ondo egin bada, langileak orrira bidali
        header("Location: ardurak.php");
        exit;
    }

    // Mysqli objektua itxi
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
        <!-- Login formularioa -->
        <form id="userform" action="login.php" method="POST">
            <div class="userkutxa">
                <img src="../../irudiak/login/profile-svgrepo-com.svg" alt="erabiltzailea">
                <label for="erabiltzailea">Erabiltzailea</label> <br>
            </div>
            <!-- Erabiltzaile izena -->
            <input type="text" id="erabiltzailea" name="erabiltzailea"> <br>
            <div class="userkutxa">
                <img src="../../irudiak/login/padlock-svgrepo-com.svg" alt="pasahitza">
                <label for="pasahitza">Pasahitza</label> <br>
            </div>
            <!-- Pasahitza -->
            <input type="password" id="pasahitza" name="pasahitza">

            <?php
              // Errore mezu bat badago, pantailaratu
              if (!empty($error_message)) {
                echo '<p style="color: yellow; text-align: center; font-weigth: bold;">' . $error_message . '</p>';
              }
            ?>
            <br>
            <!-- Bidali botoia -->
            <input type="submit" id="jarraitu" value="Jarraitu">
        </form>
    </div>
</main>
</body>
</html>
