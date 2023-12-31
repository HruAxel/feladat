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
    <title>Morning News - Admin</title>
</head>

<body>

    <div class="nav_bar">
        <nav>
            <h2>Morning News - Admin</h2>
            <a href="../feladat/admin_edit_page.php" class="nav_btn">Cikkek</a>
            <h1 style="text-align: center;">Kedves <?php print $_SESSION["user"]["name"] ?> jelenleg be vagy lépve.</h1>
            <a href="../feladat/process/admin_logout.php" class="nav_btn">Kilépés</a>
        </nav>
    </div>

    <div class="container">
        <div class="content">
            <form action="../feladat/process/admin_page_process.php" method="post">



                <?php
                if (isset($_SESSION["success"])) {
                    print "<li class=\"success\">{$_SESSION["success"]}</li>";

                    unset($_SESSION["success"]);
                }
                ?>

                <label for="title">Cím:</label>
                <?php
                if (isset($_SESSION["errors"]["title"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["title"]}</li>";
                }
                ?>
                <input type="text" name="title" id="title" value="<?php print $_SESSION["post"]["title"] ?? '' ?>">
                <label for="author">Szerző:</label>
                <?php
                if (isset($_SESSION["errors"]["author"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["author"]}</li>";
                }
                ?>
                <input type="text" name="author" id="author" value="<?php print $_SESSION["post"]["author"] ?? '' ?>">
                <label for="preview">Bevezető szöveg</label>
                <?php
                if (isset($_SESSION["errors"]["preview"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["preview"]}</li>";
                }
                ?>
                <textarea name="preview" id="preview" cols="30" rows="10" value="<?php print $_SESSION["post"]["preview"] ?? '' ?>"></textarea>

                <label for="content">Tartalom:</label>
                <?php
                if (isset($_SESSION["errors"]["content"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["content"]}</li>";
                }
                ?>
                <textarea name="content" id="content" cols="30" rows="10" value="<?php print $_SESSION["post"]["content"] ?>"></textarea>

                <label for="category">Kategória:</label>
                <?php
                if (isset($_SESSION["errors"]["category"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["category"]}</li>";
                }
                ?>
                <input list="category" name="category" value="<?php print $_SESSION["post"]["category"] ?? '' ?>">
                <datalist id="category">
                    <option value="Külföld"></option>
                    <option value="Gazdaság"></option>
                    <option value="Tudomány"></option>
                </datalist>

                <button type="submit" name="submitted" value="ok" id="btn">Cikk létrehozása!</button>
            </form>
        </div>
    </div>

    <script src="../feladat/scripts/admin_page_script.js"></script>
</body>

</html>
<?php
unset($_SESSION["errors"], $_SESSION["success"], $_SESSION["post"]);
?>