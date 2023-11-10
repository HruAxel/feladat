<?php

$connection = mysqli_connect("localhost", "root", "", "cikk");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cikkId = $_POST['cikkId'];
    $newTitle = $_POST['title'];
    $newAuthor = $_POST['author'];
    $newPreview = $_POST['preview'];
    $newContent = $_POST['content_text'];

    $update = mysqli_query($connection, "update content set title = '$newTitle', author = '$newAuthor', preview = '$newPreview', content_text = '$newContent' WHERE id = $cikkId");

    header("location:" . $_SERVER["HTTP_REFERER"]);
}

