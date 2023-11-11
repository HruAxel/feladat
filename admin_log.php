<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@1,6..96&family=Cinzel+Decorative&family=MedievalSharp&family=MonteCarlo&family=Playfair+Display&family=Poppins:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="../feladat/styles/admin_log.css">
    <script src="../feladat/scripts/jquery-3.7.0.js"></script>
    <title>Bejelentkezés - Admin</title>
</head>

<body>
    <div class="nav_bar">
        <nav>
            <h2>Morning News - Admin</h2>
            <a href="#" id="nav_btn">Belépés</a>
        </nav>
    </div>
    <div class="form_area">
        <form action="../feladat/process/admin_log_process.php" method="post">

            <h2>Üdvözöljük, a továbbiakhoz jelentkezzen be!</h2>

            <?php
            if (isset($_SESSION["errors"])) {
                foreach ($_SESSION["errors"] as $err)
                    print "<li class=\"error\">{$err}</li>";

                unset($_SESSION["errors"]);
            }
            ?>
            <?php
            if (isset($_SESSION["success"])) {
                print "<li class=\"success\">{$_SESSION["success"]}</li>";

                unset($_SESSION["errors"]);
            }
            ?>

            <input type="text" name="name" id="name" placeholder="Név">

            <input type="password" name="password" id="password" placeholder="Jelszó">

            <button type="submit" name="submitted" value="ok" id="btn">Bejelentkezés</button>
        </form>
    </div>
    <div class="welcome">
        <h3>Szép napot! Jelentkezz be, és kezdőthet is a cikk írás!</h3>
    </div>
    <script src="../feladat/scripts/admin_log_script.js"></script>
</body>

</html>

<?php
unset($_SESSION["errors"], $_SESSION["success"]);
?>