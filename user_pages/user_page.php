<?php

session_start();

$connection = mysqli_connect("localhost", "root", "", "cikk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user_pages/styles/user_page.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@1,6..96&family=Cinzel+Decorative&family=MedievalSharp&family=MonteCarlo&family=Playfair+Display&family=Poppins:wght@100&display=swap');
    </style>
    <script src="../scripts/jquery-3.7.0.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="nav_bar">
        <nav>
            <a href="../user_pages/user_page.php" class="item">Kezdőlap</a>
            <a href="#" class="item">Külföld</a>
            <a href="#">
                <h2 id="main_text">Morning News</h2>
            </a>
            <a href="#" class="item">Gazdaság</a>
            <a href="#" class="item">Tudomány</a>
        </nav>
    </div>

    <div class="container">
        <div class="content">
            <?php
            $sql = mysqli_query($connection,  "SELECT * FROM `content`;");

            while($cikk = mysqli_fetch_assoc($sql)) {
                print "<div class=\"articles\" id=\"cikk_{$cikk["id"]}\">
                <a href=\"#cikk_{$cikk["id"]}\"><h2 class=\"title\">{$cikk["title"]}</h2></a>
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
    <script src="../user_pages/scripts/user_script.js"></script>
</body>

</html>