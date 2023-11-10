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
    <link rel="stylesheet" href="../feladat/styles/admin_update_page.css">
    <script src="../feladat/scripts/jquery-3.7.0.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@1,6..96&family=Cinzel+Decorative&family=MedievalSharp&family=MonteCarlo&family=Playfair+Display&family=Poppins:wght@100&display=swap');
    </style>
    <title>Document</title>
</head>

<body>
<?php
    $cikkId = $_GET['id'];
    $sql = mysqli_query($connection, "SELECT * FROM content WHERE id = $cikkId");
    $cikk = mysqli_fetch_assoc($sql);
    ?> 

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
            <form action="../feladat/process/admin_update_process.php" method="post">

            <input type="hidden" name="cikkId" value="<?php echo $cikk['id']; ?>">

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
                <input type="text" name="title" id="title" value="<?php echo $cikk['title']; ?>">
                <label for="author">Szerző:</label>
                <?php
                if (isset($_SESSION["errors"]["author"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["author"]}</li>";
                }
                ?>
                <input type="text" name="author" id="author" value="<?php echo $cikk['author']; ?>">
                <label for="preview">Bevezető szöveg</label>
                <?php
                if (isset($_SESSION["errors"]["preview"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["preview"]}</li>";
                }
                ?>
                <textarea name="preview" id="preview" cols="30" rows="10"><?php echo $cikk['preview']; ?></textarea>

                <label for="content">Tartalom:</label>
                <?php
                if (isset($_SESSION["errors"]["content"])) {
                    print "<li class=\"error\">{$_SESSION["errors"]["content"]}</li>";
                }
                ?>
                <textarea name="content_text" id="content" cols="30" rows="10"><?php echo $cikk['content_text']; ?></textarea>

                <button type="submit" name="submitted" value="ok" class="update" id="btn">Cikk módosítása!</button>
            </form> 
        </div>
    </div>




    <script src="../feladat/scripts/admin_update_page.js"></script>
</body>

</html>
<?php
unset($_SESSION["errors"], $_SESSION["success"], $_SESSION["post"]);
?>