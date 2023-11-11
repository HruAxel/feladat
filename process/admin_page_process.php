<?php 

session_start();

$connection = mysqli_connect("localhost", "root", "", "cikk");

if(isset($_POST["submitted"])) {

    $title = $_POST["title"];
    $author = $_POST["author"];
    $preview = $_POST["preview"];
    $content = $_POST["content"];
    $category = $_POST["category"];

    $errors = [];

    $sql_result = mysqli_query($connection, "select * from content where title = '$title'");
    $found = mysqli_num_rows($sql_result) > 0;

    if ($found === true) {
        $errors["title"] = 'Ez már egy létező cím!!';
    }

    if(strlen($title) <= 0) {
        $errors["title"] = 'Kötelező címet megadni!';
    }

    if(strlen($title) >= 99) {
        $errors["title"] = 'A cím túl hosszú!';
    }

    if(strlen($author) <= 0) {
        $errors["author"] = 'Kötelező szerzőt megadni!';
    }

    if(strlen($author) >= 19) {
        $errors["author"] = 'A szerzői név túl hosszú!';
    }

    if(strlen($preview) <= 0) {
        $errors["preview"] = 'Kötelező bevezető szöveget megadni!';
    }

    if(strlen($content) < 100) {
        $errors["content"] = 'Kérlek legalább 100 karakterből álljon a cikk!';
    }

    if(strlen($category) <= 0) {
        $errors["category"] = 'Kötelező megadni kategóriát!';
    }

    if(count($errors) === 0) {

        mysqli_query($connection, "INSERT INTO `content` (`title`, `author`, `preview`, `content_text`, `category`, `created_at`, `updated_at`) 
        VALUES ('$title', '$author', '$preview', '$content', '$category',  current_timestamp(), NULL)");

        header("location:" . $_SERVER["HTTP_REFERER"]);

        $_SESSION["success"] = 'Sikeres küldés!';


    } else {
        header("location:" . $_SERVER["HTTP_REFERER"]);

        $_SESSION["errors"] = $errors;
        $_SESSION["post"] = $_POST;


    }
}