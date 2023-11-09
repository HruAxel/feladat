<?php
session_start();

isset($_SESSION["user"]) or die('No acces allowed!');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../feladat/styles/admin_page.css">
    <script src="../feladat/scripts/jquery-3.7.0.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@1,6..96&family=Cinzel+Decorative&family=MedievalSharp&family=MonteCarlo&family=Playfair+Display&family=Poppins:wght@100&display=swap');
    </style>
    <title>Document</title>
</head>

<body>

    <div class="nav_bar">
        <nav>
            <h2>Morning News - Admin</h2>
            <a href="../feladat/admin_page.php" class="nav_btn">Vissza</a>
            <h1 style="text-align: center;">Kedves <?php print $_SESSION["user"]["name"] ?> jelenleg be vagy lépve.</h1>
            <a href="../feladat/process/admin_logout.php" class="nav_btn">Kilépés</a>
        </nav>
    </div>

    <div class="container">
        <div class="content">
        </div>
    </div>




    <script src="../feladat/scripts/admin_page_script.js"></script>
</body>

</html>
<?php
unset($_SESSION["errors"], $_SESSION["success"], $_SESSION["post"]);
?>