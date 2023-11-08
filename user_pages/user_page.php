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
    <title>Document</title>
</head>

<body>
    <div class="nav_bar">
        <nav>
            <a href="#" class="item">Kezdőlap</a>
            <a href="#" class="item">Külföld</a>
            <a href="#">
                <h2>Morning News</h2>
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
                print "<div class=\"articles\">
                <h3>Cím: {$cikk["title"]}</h3> <h3>szerző:  {$cikk["author"]}<h3>
                </div>" ;
            }

            

            
            ?>
        </div>
    </div>
</body>

</html>