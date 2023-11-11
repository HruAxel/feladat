<?php
session_start();

isset($_SESSION["user"]) or die('No acces allowed!');

$connection = mysqli_connect("localhost", "root", "", "cikk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../feladat/styles/admin_edit_page.css">
    <script src="../feladat/scripts/jquery-3.7.0.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@1,6..96&family=Cinzel+Decorative&family=MedievalSharp&family=MonteCarlo&family=Playfair+Display&family=Poppins:wght@100&display=swap');
    </style>
    <title>Szerkesztő - Admin</title>
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
        <?php
            $sql = mysqli_query($connection,  "SELECT * FROM `content`;");

            while($cikk = mysqli_fetch_assoc($sql)) {
                print "<div class=\"articles\" id=\"cikk_{$cikk["id"]}\">
                <a href=\"#cikk_{$cikk["id"]}\"><h2 class=\"title\">{$cikk["title"]}</h2></a>

                <div class=\"buttons\">
                <form action=\"../feladat/process/admin_edit_delete_process.php\" method=\"post\">
                <input type=\"submit\" class=\"delete\" value=\"TÖRLÉS\">
                <input type=\"hidden\" name=\"cikkId\" value=\"' {$cikk['id']} '\">
                </form>

                <a href=\"../feladat/admin_update_page.php?id='{$cikk['id']}'\" class=\"update\">Szerkesztés</a>
                </div>

                <h4 class=\"author\">Szerző: {$cikk["author"]}</h4>
                <div class=\"preview_div\"><h3 class=\"preview\">{$cikk["preview"]}</h3></div>
                <div class=\"content_container\">
                    <p>{$cikk["content_text"]}</p>
                    <a class=\"close\" href=\"#\">Bezárás</a>
                </div>
            </div>";
            }
            ?>
        </div>

        
    </div>




    <script src="../feladat/scripts/admin_edit_page.js"></script>
</body>

</html>
<?php

?>